<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Product_image;
use App\Models\Rating;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:vendor');
    // }

    /**
     * Get all products for the authenticated vendor.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProducts()
    {
        $vendor = auth('vendor')->user();
        $products = $vendor->products;

        if (!$products) {
            return response()->json(["message" => "Product not found"], 404);
        }

        $result = [];
        foreach ($products as $product) {
            $result[$product->id] = $product->images;
            $result[$product->id] = $products->rating;
            $result[$product->id] = $product;
        }
        return response()->json(["products" => $result], 200);

    }
    public function getAllProducts()
    {
        $result = [];

        $products = Product::all();
        foreach ($products as $product) {
            $imagePaths = [];
            foreach ($product->images as $image) {
                $imagePaths[] = $image->image;
            }
            $productData = [
                'id' => $product->id,
                'vendor_id' => $product->vendor_id,
                'product_name' => $product->product_name,
                'price' => $product->price,
                'discount' => $product->discount,
                'stock' => $product->stock,
                'is_on_sale' => $product->is_on_sale,
                'created_at' => $product->created_at,
                'updated_at' => $product->updated_at,
                'category_id' => $product->category_id,
                'images' => $imagePaths
            ];
            $result[] = $productData;
        }

        return response()->json(["products" => $result]);
    }



    /**
     * Get details of a single product for the authenticated vendor.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSingleProduct($id)
    {
        $vendor = auth("vendor")->user();
        $product = $vendor->products->find($id);
        if (!$product) {
            return response()->json(["message" => "product not found"], 404);
        }

        $product = Product::find($id);
        // get category info
        $category = Category::find($product->category_id);
        $ratings = $product->rating()->findMany($id)->all();
        $images = Product_image::findMany($id)->all();

        // exclude products from vendor
        $vendorData = $vendor->toArray();
        unset($vendorData['products']);

        return response()->json([
            "message" => "Product Found",
            "product" => $product,
            "vendor" => $vendorData,
            "ratings" => $ratings,
            "category" => $category,
            "images" => $images,
        ], 200);
    }
    public function getSingleProductById($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(["message" => "product not found"], 404);
        }
        // get category info
        $category = Category::find($product->category_id);
        $ratings = $product->rating()->findMany($id)->all();
        $images = Product_image::findMany($id)->all();
        $imagePaths = [];
        $recommended = $this->getRecommendedProducts(8);

        foreach ($images as $image) {
            $imagePaths[] = $image->image;
        }

        return response()->json([
            "message" => "Product Found",
            "product" => $product,
            "ratings" => $ratings,
            "category" => $category->name,
            "images" => $imagePaths,
            "recommended" => $recommended
        ], 200);
    }

    /**
     * Update a product for the authenticated vendor.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateProduct(Request $request, $id)
    {
        $vendor = auth("vendor")->user();
        $product = $vendor->products()->find($id);
        // dd($product->price);
        // Check if the product exists
        if (!$product) {
            // Product not found, handle the error (return a response, redirect, etc.)
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Update the product attributes based on the request data
        $product->update([
            'product_name' => $request->input('product_name'),
            'price' => $request->input('price') ? $request->input('price') : $product->price,
            'discount' => $request->input('discount') ?? $product->discount,
            'stock' => $request->input('stock') ?? $product->stock,
            'is_on_sale' => $request->input('is_on_sale') ?? $product->is_on_sale,
            'image1' => $request->input('image1') ?? $product->image1,
            'image2' => $request->input('image2') ?? $product->image2,
            'image3' => $request->input('image3') ?? $product->image3,
            'image4' => $request->input('image4') ?? $product->image4,
            'descreption' => $request->input('descreption') ?? $product->descreption
        ]);

        // Return a response indicating the update was successful
        return response()->json(['message' => 'Product updated successfully', "product" => $product], 201);
    }

    /**
     * Create a new product for the authenticated vendor.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createProduct(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'product_name' => 'required|string',
            'price' => 'required|numeric',
            'discount' => 'numeric|nullable',
            'stock' => 'required|integer',
            'is_on_sale' => 'boolean',
            'category_id' => 'required|integer',
            'image1' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image3' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image4' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'descreption' => 'required|string|min:10',
        ]);
        // Get the authenticated vendor
        $vendor = auth("vendor")->user();

        // $imagePath = $request->file('image')->store('images');
        // Create a new product for the vendor
        $product = $vendor->products()->create([
            "product_name" => $validatedData["product_name"],
            "price" => $validatedData["price"],
            "discount" => $validatedData["discount"],
            "stock" => $validatedData["stock"],
            "is_on_sale" => $validatedData["is_on_sale"] ?? false,
            "category_id" => $validatedData["category_id"],
            "descreption" => $validatedData['descreption'],
        ]);

        try {
            $this->storeImage($request, $product->id);
        } catch (\Exception $e) {
            return response()->json($e, 500);
        }
        $product->save();
        // Return a response indicating the success of the creation
        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product,
        ], 201);
    }

    /**
     * Delete a product for the authenticated vendor.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteProduct($id)
    {
        // Get the authenticated vendor
        $vendor = auth("vendor")->user();

        // Find the product with the given ID owned by the vendor
        $product = $vendor->products()->find($id);

        // Check if the product exists
        if (!$product) {
            // Product not found, handle the error (return a response, redirect, etc.)
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Delete the product
        $product->delete();

        // Return a response indicating the success of the deletion
        return response()->json(['message' => 'Product deleted successfully']);
    }

    /**
     * Store product images for a specific product.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id The ID of the product for which images are being stored
     * @return void
     */
    public function storeImage(Request $request, $id)
    {
        $vendor = auth("vendor")->user();
        // dd($vendor->id);
        try {
            for ($i = 1; $i <= 4; $i++) {
                // Create a new Product_image instance for each image
                $product_image = new Product_image;
                $product_image->product_id = $id;

                // Store the image on the server
                if ($request->hasFile("image{$i}")) {
                    $imageNameWithExtension = $id . '_' . 'product_image' . $i . '.' . $request->file("image{$i}")->getClientOriginalExtension();
                    $request->file("image{$i}")->move("product_images/{$vendor->id}", $imageNameWithExtension);
                    $product_image->image = env('APP_URL') . ':8000' . "/product_images/{$vendor->id}/" . $imageNameWithExtension;
                    $product_image->save();
                }
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Get images associated with a specific product.
     *
     * @param int $productId The ID of the product.
     * @return \Illuminate\Http\JsonResponse
     */
    public function getImages($productId)
    {
        $images = Product_image::where('product_id', $productId)->get();

        // You can return the images to your view or API response
        return response()->json(['images' => $images]);
    }

    /**
     * Get a paginated list of products.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProductsPerPage(Request $request)
    {
        // Define the number of items per page
        $perPage = $request->input('per_page', 10);

        // Retrieve paginated data from the database
        $products = Product::paginate($perPage);

        // get query parameters
        $query = $request->query->all();
        if ($query["page"] > $products->lastPage())
            return response()->json(["message" => "invalid page number"], 404);

        // You can customize the response structure if needed
        return response()->json(['products' => $products]);
    }

    /**
     * Get a specified number of randomly recommended products.
     *
     * @param int $number The number of recommended products to retrieve.
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Builder[] Recommended products.
     */
    public function getRecommendedProducts($number)
    {
        return Product::inRandomOrder()->take($number)->get();
    }
}

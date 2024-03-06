<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Product_image;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Arrayabl;

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

        return response()->json(["products" => $products], 200);
    }

    /**
     * Get a single product with additional information for the authenticated vendor.
     *
     * @param Request $request
     * @param array| \Illuminate\Contracts\Support\Arrayable
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSingleProduct(Request $request, $id)
    {
        $vendor = auth("vendor")->user();
        $product = $vendor->products->find($id);

        if (!$product) {
            return response()->json(["message" => "Product not found"], 404);
        }

        $p = Product::find($id);
        // get category info
        $category = Category::find($product->category_id);
        $ratings = $p->rating()->findMany($id)->all();
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

    /**
     * Update product information for the authenticated vendor.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateProduct(Request $request, $id)
    {
        $vendor = auth("vendor")->user();
        $product = $vendor->products()->find($id);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Update the product attributes based on the request data
        $product->update([
            'product_name' => $request->input('product_name'),
            'price' => $request->input('price') ? $request->input('price') : $product->price,
            'discount' => $request->input('discount') ?? $product->discount,
            'stock' => $request->input('stock') ?? $product->stock,
            'is_on_sale' => $request->input('is_on_sale') ?? $product->is_on_sale,
            'cart_id' => $request->input('cart_id') ?? $product->cart_id,
            'image1' => $request->input('image') ?? $product->image1,
        ]);

        // Return a response indicating the update was successful
        return response()->json(['message' => 'Product updated successfully', "product" => $product], 201);
    }

    /**
     * Create a new product for the authenticated vendor.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createProduct(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            // ... (your validation rules)
        ]);

        // Get the authenticated vendor
        $vendor = auth("vendor")->user();

        // Create a new product for the vendor
        $product = $vendor->products()->create([
            // ... (assign attributes from validated data)
        ]);

        // Handle product image storage
        try {
            $this->storeImage($request, $product->id);
        } catch (\Exception $e) {
            return response()->json($e, 500);
        }

        // Save the product
        $product->save();

        // Return a response indicating the success of the creation
        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product
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
     * Store product images on the server for a given product ID.
     *
     * @param Request $request
     * @param int $id
     * @return void
     * @throws \Exception
     */
    public function storeImage(Request $request, $id)
    {
        $vendor = auth("vendor")->user();

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
     * Get product images for a given product ID.
     *
     * @param int $productId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getImages($productId)
    {
        $images = Product_image::where('product_id', $productId)->get();

        // Return the images in the API response
        return response()->json(['images' => $images]);
    }

}



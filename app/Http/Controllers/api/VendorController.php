<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Validator;


class VendorController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth:vendor', ['except' => ['loginVendor', 'registerVendor']]);

    }

    public function loginVendor(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required | email',
            'password' => 'required | min:8'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        // try to login and if not valid user return false
        $token = auth('vendor')->attempt($request->only('email', 'password'));
        if ($token) {
            $vendor = auth('vendor')->user();
            $vendorToken = $vendor->createToken('AuthToken')->accessToken;
            return response()->json(['token' => $token, 'user' => $vendor], 200);

        }
        return response()->json(['error' => 'Invalid credentials'], 401);

    }
    public function registerVendor(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required|min:3|string',
            'lname' => 'required|min:3|string',
            'business_name' => 'required|min:3',
            'email' => 'required|email|unique:vendors,email',
            'phone_number' => 'required|unique:vendors,phone_number|max:11|min:11',
            'password' => 'required|min:8',
            'id_photo_front' => 'file|image|mimes:jpeg,png,jpg,gif',
            'id_photo_back' => 'file|image|mimes:jpeg,png,jpg,gif',
            'logo_pic' => 'file|image|mimes:jpeg,png,jpg,gif',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        
        $vendor = new Vendor();
        $vendor->fname = $request->input('fname');
        $vendor->lname = $request->input('lname');
        $vendor->email = $request->input('email');
        $vendor->business_name = $request->input('business_name');
        $vendor->phone_number = $request->input('phone_number');
        $vendor->password = \Hash::make($request->input('password'));
        $vendor->is_active = false;
        $vendor->plan_id = 1;
        $vendor->save();

        // get the vendor id to store the images with the id of its vendor .
        $vendorId = $vendor->id;

        if ($request->hasFile('id_photo_front')) {
            $imageNameWithExtension = $vendorId . '_' . 'id_photo_front' . '.' . $request->file('id_photo_front')->getClientOriginalExtension();
            $request->file('id_photo_front')->move('vendor_images', $imageNameWithExtension);
            $vendor->id_photo_front =  env('APP_URL') . ':8000' .'/vendor_images/' . $imageNameWithExtension;
        }


        if ($request->hasFile('id_photo_back')) {
            $imageNameWithExtension = $vendorId . '_' . 'id_photo_back' . '.' . $request->file('id_photo_back')->getClientOriginalExtension();
            $request->file('id_photo_back')->move('vendor_images', $imageNameWithExtension);
            $vendor->id_photo_back = env('APP_URL') . ':8000' . '/vendor_images/' . $imageNameWithExtension;
        }

        if ($request->hasFile('logo_pic')) {
            $imageNameWithExtension = $vendorId . '_' . 'logo_pic' . '.' . $request->file('logo_pic')->getClientOriginalExtension();
            $request->file('logo_pic')->move('vendor_images', $imageNameWithExtension);
            $vendor->logo_pic =  env('APP_URL') . ':8000' .'/vendor_images/' . $imageNameWithExtension;
        }
        $vendor->save();
        return response()->json(['message' => 'Vendor registered successfully'], 201);



    
    }

    ///////// products

    public function getProducts()
    {
        $vendor = auth('vendor')->user();

        $products = $vendor->products;
        // dd($products);
        if (!$products) {
            return response()->json(["message" => "Product not found"], 404);
        }

        return response()->json(["products" => $products], 200);
    }


    public function getSingleProduct(Request $request, $id)
    {
        $vendor = auth("vendor")->user();
        $product = $vendor->products->find($id);
        if (!$product) {
            return response()->json(["message" => "product not found"], 404);
        }
        return response()->json([
            "message" => "Product Found",
            "product" => $product
        ], 200);
    }

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
            'cart_id' => $request->input('cart_id') ?? $product->cart_id
        ]);

        // Return a response indicating the update was successful
        return response()->json(['message' => 'Product updated successfully', "product" => $product], 201);
    }

    public function createProduct(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'product_name' => 'required|string',
            'price' => 'required|numeric',
            'discount' => 'numeric|nullable',
            'stock' => 'required|integer',
            'is_on_sale' => 'required|boolean',
            // 'cart_id' => 'required|integer',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Get the authenticated vendor
        $vendor = auth("vendor")->user();

        // $imagePath = $request->file('image')->store('images');
        // Create a new product for the vendor
        $product = $vendor->products()->create($validatedData);
        // $product->image_path = $imagePath;
        $product->save();
        // Return a response indicating the success of the creation
        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product
        ], 201);
    }
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

    public function getPlan()
    {
        // Get the authenticated vendor
        $vendor = auth("vendor")->user();
        return $vendor->plan;
    }


    ///////// images
    public function getImages()
    {
        $vendor = auth("vendor")->user();

        return $vendor->images;
    }

    public function storeImage(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // adjust the validation rules as needed
        ]);

        // Store the image on the server
        $imagePath = $request->file('image')->store('images');

        // Save the image path in the database
        // Assuming your model is named 'YourModel'
        // $yourModel = YourModel::find($request->input('model_id'));
        // $yourModel->image_path = $imagePath;
        // $yourModel->save();
        // $vendor = auth('vendor')->user();
        $product = Product::find($id);
        $product->image_path = $imagePath;
        $product->save();

        return response()->json(['message' => 'Image uploaded successfully']);

    }

   
}

<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function __construct()
    {
        # By default we are using here auth:api middleware
        $this->middleware('auth:vendor', ['except' => ['loginVendor', 'registerVendor']]);

    }
    public function loginVendor(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'required | email',
            'password' => 'required | min:8'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        // try to login and if not valid user return false
        $token = auth('vendor')->attempt($request->only('email', 'password'));
        if ($token) {
            $user = auth('vendor')->user();
            $userToken = $user->createToken('AuthToken')->accessToken;

            return response()->json(['token' => $token, 'user' => $user], 200);
        }
        return response()->json(['error' => 'Invalid credentials'], 401);

    }
    public function registerVendor(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'fname' => 'required |min:3 |string',
            'lname' => 'required |min:3 |string',
            'email' => 'required |email | unique:users,email',
            'password' => 'required | min:8',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $user = Vendor::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'password' => \Hash::make($request->input('password')),
        ]);


        return response()->json(['message' => "success", 'user' => $user], 200);
    }

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
        ]);

        // Get the authenticated vendor
        $vendor = auth("vendor")->user();

        // Create a new product for the vendor
        $product = $vendor->products()->create($validatedData);

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
}

<?php

namespace App\Http\Controllers;

use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (auth()->user()->getTable() == 'admins') {
            return CartResource::collection(Cart::all());
        } elseif (auth()->user()->getTable() == 'users') {
            $user = $request->user();
            return new CartResource($user->cart);
        }

    }




    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $cart = Cart::where("user_id", $request->user()->id)->first();
        $totalPrice = 0;
        foreach ($request->products as $product) {

            $cart->products()->syncWithoutDetaching([$product['productId'] => ['quantity' => $product['quantity']]]);
            $dbProduct = Product::find($product['productId']);
            $totalPrice += $dbProduct->price * $product['quantity'];
        }
        $cart->update([
            'total_price' => $totalPrice
        ]);

        return response()->json(['message' => 'Cart updated successfully', 'status' => 200]);
        ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Cart $cart)
    {
        if (strpos($request->url(), '/admin/') == true) {
            $cart->delete();
            $res = [
                "message" => "Deleted Successfully"
            ];
            return response()->json($res);
        }
    }
}

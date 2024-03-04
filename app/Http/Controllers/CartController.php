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


    public function store(Request $request)
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

        return response()->json([
            'message' => 'Cart created successfully',
            'status' => 200,
            'data' => new CartResource($cart)
        ]);
        ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        if (auth()->user()->getTable() == 'admins') {
            return new CartResource($cart);
        } else
            return [
                "message" => "Unauthorized user"
            ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $cart = Cart::where("user_id", $request->user()->id)->first();
        $totalPrice = 0;

        foreach ($request->products as $productId) {
            $cartItem = $cart->products()->where('product_id', $productId)->first();

            if ($request->operation == 'add') {
                $newQuantity = $cartItem->pivot->quantity + 1;
            } elseif ($request->operation == 'subtract') {
                $newQuantity = max($cartItem->pivot->quantity - 1, 1);
            }

            $cart->products()->updateExistingPivot($productId, ['quantity' => $newQuantity]);
            $dbProduct = Product::find($productId['productId']);
            $totalPrice += $dbProduct->price * $newQuantity;

        }
        $cart->update(['total_price' => $totalPrice]);
        return response()->json(['message' => 'Cart updated successfully', 'data' => new CartResource($cart)]);

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Cart $cart)
    {
        if (auth()->user()->getTable() == 'admins') {
            $cart->delete();
            $res = [
                "message" => "Deleted Successfully"
            ];
            return response()->json($res);
        } elseif (auth()->user()->getTable() == 'users') {
            $userCart = Cart::where("user_id", $request->user()->id)->first();
            $removedPrice = 0;
            $totalPrice = $userCart->total_price;

            foreach ($request->products as $productId) {
                $dbProduct = Product::find($productId['productId']);

                $cartItem = $userCart->products()->where('product_id', $productId)->first();
                if ($cartItem) {
                    $removedPrice = $dbProduct->price * $cartItem->pivot->quantity;
                }
                $userCart->products()->detach($productId);

                $totalPrice -= $removedPrice;

            }
            $cart->update(['total_price' => $totalPrice]);

            return response()->json(['message' => 'Item removed successfully', 'data' => new CartResource($cart)]);

        }
    }
}

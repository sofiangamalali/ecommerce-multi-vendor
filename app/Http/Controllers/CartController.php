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
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\AnonymousResourceCollection|\App\Http\resources\CartResource
     */
    public function index(Request $request)
    {
        if (auth()->user()->getTable() == 'admins') {
            return CartResource::collection(Cart::all());
        } elseif (auth()->user()->getTable() == 'users') {
            $user = $request->user();
            return new CartResource($user->cart);
        }
        return response()->json(['message' => 'error accessing data']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $cart = Cart::where("user_id", $request->user()->id)->first();

        $totalPrice = 0;
        foreach ($request->products as $product) {
            $cart->products()->syncWithoutDetaching([$product['productId'] => ['quantity' => $product['quantity']]]);
            $dbProduct = Product::find($product['productId']);
            if ($dbProduct->stock < $product['quantity']) {
                return response()->json([
                    'message' => 'Product out of stock',
                    'stock number' => $dbProduct->stock
                ]);
            }
            $totalPrice += $dbProduct->price * $product['quantity'];
            if ($dbProduct['discount']) {
                $totalPrice -= ($dbProduct->price * $product['quantity']) * $dbProduct['discount'];
            }


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
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $cart = Cart::where("user_id", $request->user()->id)->first();
        $totalPrice = 0;

        foreach ($request->products as $productId) {
            $cartItem = $cart->products()->where('product_id', $productId)->first();
            $dbProduct = Product::find($productId['productId']);

            if ($request->operation == 'add') {
                $newQuantity = $cartItem->pivot->quantity + 1;
                if ($dbProduct->stock < $newQuantity) {
                    return response()->json([
                        'message' => 'Product out of stock',
                        'stock number' => $dbProduct->stock
                    ]);
                }
            } elseif ($request->operation == 'subtract') {
                $newQuantity = max($cartItem->pivot->quantity - 1, 1);
            }

            $cart->products()->updateExistingPivot($productId, ['quantity' => $newQuantity]);
            $totalPrice += $dbProduct->price * $newQuantity;

        }
        $cart->update(['total_price' => $totalPrice]);
        return response()->json(['message' => 'Cart updated successfully', 'data' => new CartResource($cart)]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\JsonResponse
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
                $products = $userCart->products->all();
                if (count($products) === 0) {
                    $totalPrice = 0;
                }

            }

            $cart->update(['total_price' => $totalPrice]);
            return response()->json(['message' => 'Item removed successfully', 'data' => new CartResource($cart)]);

        }
        // Ensure that there's a default return statement if neither condition is met
        return response()->json(['message' => 'Unexpected condition occurred'], 500);
    }
}

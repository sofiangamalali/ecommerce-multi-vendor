<?php

namespace App\Http\Controllers;

use App\Models\WishList;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    private $userId;
    function __construct()
    {
        $this->userId = auth('user')->user()->id;
    }
    public function getUserWishlist()
    {
        $userWishlist = Wishlist::where('user_id', $this->userId)
            ->with(['product' => function ($query) {
                $query->select('id', 'product_name', 'category_id');
                $query->with(['category:id,name']);
            }])
            ->get();


        $wishlistData = $userWishlist->map(function ($wishlist) {
            $firstImage = $wishlist->product->images->first();
            return [
                'id' => $wishlist->product->id,
                'product_name' => $wishlist->product->product_name,
                'category_name' => $wishlist->product->category->name,
                'image'=> $firstImage ? $firstImage->image :null,
            ];
        });

        return response()->json($wishlistData, 200);
    }
    public function addProductToWishlist(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);
        $existingWishlist = Wishlist::where('user_id', $this->userId)
            ->where('product_id', $request->product_id)
            ->first();

        if ($existingWishlist) {
            return response()->json(['message' => 'Product already in Wishlist'], 200);
        }
        Wishlist::create([
            'user_id' => $this->userId,
            'product_id' => $request->product_id,
        ]);

        return response()->json(['message' => 'Product added to wishlist'], 201);
    }
    public function deleteProductFromWishlist(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $existingWishlist = Wishlist::where('user_id', $this->userId)
            ->where('product_id', $request->product_id)
            ->first();

        if (!$existingWishlist) {
            return response()->json(['message' => 'Product does not exists in Wishlist'], 200);
        }
        Wishlist::where('user_id', $this->userId)
            ->where('product_id', $request->product_id)
            ->delete();

        return response()->json(['message' => 'Product removed from wishlist'], 200);
    }


}

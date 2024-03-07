<?php

namespace App\Http\Controllers;

use App\Models\WishList;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function getUserWishlist($userId)
    {
        $userWishlist = Wishlist::where('user_id', $userId)->with('product')->get();

        return response()->json($userWishlist, 200);
    }

}

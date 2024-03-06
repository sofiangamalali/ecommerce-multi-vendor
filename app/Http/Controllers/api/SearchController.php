<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        if (!$query) {
            return response()->json(['message' => 'Please provide a search query.'], 400);
        }

        $results = Product::where('product_name', 'like', '%' . $query . '%')->get();

        return response()->json(['results' => $results], 200);
    }
}

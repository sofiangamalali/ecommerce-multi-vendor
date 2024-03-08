<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\Http\Resources\RatingResource;
use App\Models\Product;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    /**
     * Display a listing of ratings.
     *
     * @return \RatingResource::collection
     */
    public function index()
    {
        return RatingResource::collection(Rating::all());
    }


    /**
     * Store a newly created rating in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $user = auth('user')->user();
        if (!$user)
            return response()->json(['message' => 'Invalid token'], 404);

        $validatedData = $request->validate([
            'rate' => 'required|numeric|between:0,5'
        ]);
        $rating = new Rating();
        $rating->user_id = $user->id;
        $rating->product_id = $request->product_id;
        $rating->rate = $validatedData['rate'];
        $rating->review = $request->review;
        $rating->save();

        // update average rating
        $this->calculateAverageRating($request->product_id);

        return response()->json(['message' => 'Review submitted successfully']);

    }

    /**
     * Display the ratings for a specific product.
     *
     * @param  string  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(string $id)
    {
        $rating = Rating::where('product_id', $id)
            ->get();
        return response()->json(['data' => RatingResource::collection($rating)]);

    }

    /**
     * Update the specified rating in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {

        $user = auth('user')->user();
        $validatedData = $request->validate([
            'rate' => 'numeric|between:0,5'
        ]);
        $rating = Rating::where('user_id', $user->id)
            ->where('product_id', $request->product_id)
            ->first();
        $rating->rate = $validatedData['rate'];
        $rating->review = $request->review;
        $rating->update();

        $this->calculateAverageRating($request->product_id);
        return response()->json(['message' => 'Review updated successfully']);
    }

    /**
     * Remove the specified rating from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request)
    {
        $user = auth('user')->user();
        $rating = Rating::where('user_id', $user->id)
            ->where('product_id', $request->productId)
            ->first();
        $rating->delete();
        return response()->json(['message' => 'Review deleted successfully']);
    }

    /**
     * Calculate and update the average rating for a product.
     *
     * @param  int  $productId
     * @return void
     */
    public function calculateAverageRating($productId)
    {
        // Retrieve the product
        $product = Product::findOrFail($productId);

        // Get the ratings for the product
        $ratings = $product->rating;

        // Calculate the average rating
        $averageRating = $ratings->avg('rate');

        // Update the product's averageRating field
        $product->update(['averageRating' => $averageRating]);

        $product->save();

    }
}

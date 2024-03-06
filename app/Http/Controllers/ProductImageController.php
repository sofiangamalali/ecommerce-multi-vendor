<?php

namespace App\Http\Controllers;

use App\Models\Product_image;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    public function storeImage(Request $request, $id)
    {
        $vendor = auth("vendor")->user();
        $product_image = new Product_image;
        $product_image->product_id = $id;

        try {
            // Store the image on the server
            if ($request->hasFile('image')) {
                $imageNameWithExtension = $vendor->id . '_' . 'product_image' . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move('product_images', $imageNameWithExtension);
                $product_image->image = env('APP_URL') . ':8000' . '/product_images/' . $imageNameWithExtension;
            }
            // $product_image->created_at = $product_image->created_at ?? now();
            // $product_image->updated_at = now();
            $product_image->save();
        } catch (\Exception $e) {
            throw $e;
        }
    }
}

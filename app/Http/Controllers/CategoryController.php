<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CategoryResource::collection(Category::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        $categoryId = $category->id;
        if ($request->hasFile('category_image')) {
            $imageNameWithExtension = $categoryId . '_' . 'category_image' . '.' . $request->file('category_image')->getClientOriginalExtension();
            $request->file('category_image')->move('category_images', $imageNameWithExtension);
            $category->category_image = env('APP_URL') . ':8000' . '/category_images/' . $imageNameWithExtension;
        }
        $category->save();
        return response()->json(['message' => 'Category created successfully']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        if ($request->name) {
            $category->name = $request->name;
        }
        $categoryId = $category->id;
        if ($request->hasFile('category_image')) {
            $imageNameWithExtension = $categoryId . '_' . 'category_image' . '.' . $request->file('category_image')->getClientOriginalExtension();
            $request->file('category_image')->move('category_images', $imageNameWithExtension);
            $category->category_image = env('APP_URL') . ':8000' . '/category_images/' . $imageNameWithExtension;
        }
        $category->update();
        return new CategoryResource($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        $res = [
            "message" => "Deleted Successfully",
            "status" => 200,
            "data" => new CategoryResource($category)
        ];
        return response()->json($res);
    }
}

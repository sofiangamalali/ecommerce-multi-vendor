<?php

use App\Http\Controllers\api\CardController;
use App\Http\Controllers\api\OrderController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\SearchController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\AdminController;
use App\Http\Controllers\api\JwtController;

use App\Http\Controllers\api\VendorController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// User Routes
Route::group(["prefix" => "user"], function () {
    Route::post("login", [UserController::class, "loginUser"]);
    Route::post("register", [UserController::class, "registerUser"]);
    Route::resource('/cart', CartController::class)->middleware('auth:user');
    // write users routes
    // card routes
    Route::get("card/{id}", [CardController::class, "getCard"]);
    Route::get("card", [CardController::class, "getAllCards"]);
    Route::post("addCard", [CardController::class, "addCard"]);
    Route::delete("removeCard/{id}", [CardController::class, "removeCard"]);
    Route::patch("updateCard/{id}", [CardController::class, "updateCard"]);

    Route::post("order", [OrderController::class, "create"]);
    Route::get("order", [OrderController::class, "show"]);
    Route::patch("order", [OrderController::class, "update"]);
    Route::delete("order", [OrderController::class, "destroy"]);
});

// Admin Routes
Route::group(["prefix" => "admin"], function () {

    Route::post("login", [AdminController::class, "loginAdmin"]);
    Route::post("register", [AdminController::class, "registerAdmin"]);
    Route::resource('/cart', CartController::class)->middleware('auth:admin');

    // write admin routes
});

Route::controller(VendorController::class)
    ->prefix("vendor")
    ->group(function () {
        // Route::post("login", [VendorController::class, "loginVendor"]);
        // Route::post("register", [VendorController::class, "registerVendor"]);
        Route::post("login", "loginVendor");
        Route::post("register", "registerVendor");

    });

// product Routes
Route::controller(ProductController::class)
    ->middleware("auth:vendor")
    ->group(function () {
        // Product Routes
        Route::get("products", "getProducts");
        Route::get("products/{id}", "getSingleProduct");
        Route::get("products/images/{id}", "getImages");
        Route::patch("products/{id}", "updateProduct");
        Route::post("products", "createProduct");
        Route::delete("/products/{id}", "deleteProduct");
    });

Route::get('/search', [SearchController::class, 'search']);
Route::resource('/category', CategoryController::class);


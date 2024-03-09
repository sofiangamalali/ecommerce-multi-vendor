<?php

use App\Http\Controllers\api\CardController;
use App\Http\Controllers\api\OrderController;

use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\PromoCodeController;
use App\Http\Controllers\api\SearchController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\AdminController;
use App\Http\Controllers\api\VendorController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WishListController;
use App\Http\Controllers\api\RatingController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// User Routes
Route::group(["prefix" => "user"], function () {
    //user
    Route::post("login", [UserController::class, "loginUser"]);
    Route::post("register", [UserController::class, "registerUser"]);
    Route::post("changePassword", [UserController::class, "changePassword"]);
    Route::get('get-data', [UserController::class, 'showUser']);

    //order
    Route::get('orders', [UserController::class, 'getUserOrders']);
    Route::post('order/cancel/{id}', [UserController::class, 'cancelOrder']);

    //cart
    Route::resource('cart', CartController::class)->middleware('auth:user');

    //rating
    Route::post('rating/create', [RatingController::class, 'store'])->middleware('auth:user');

    //wishList
    Route::get('getwishlist', [WishListController::class, 'getUserWishlist'])->middleware('auth:user');
    Route::post('wishlist/add', [WishListController::class, 'addProductToWishlist'])->middleware('auth:user');
    Route::delete('wishlist/delete', [WishListController::class, 'deleteProductFromWishlist'])->middleware('auth:user');

    // write users routes

});

// Admin Routes
Route::group(["prefix" => "admin"], function () {
    Route::post("login", [AdminController::class, "loginAdmin"]);
    Route::post("register", [AdminController::class, "registerAdmin"]);

    Route::resource('cart', CartController::class)->middleware('auth:admin');


    //PaymentMethods
    Route::get('payments', [PaymentController::class, 'getAllPayment'])->middleware('auth:admin');
    Route::post('payment/create', [PaymentController::class, 'createPayment'])->middleware('auth:admin');
    Route::patch('payment/update/{id}', [PaymentController::class, 'updatePayment'])->middleware('auth:admin');
    Route::delete('payment/delete/{id}', [PaymentController::class, 'deletePayment'])->middleware('auth:admin');

    //PromoCode
    Route::get('promocodes', [PromoCodeController::class, 'getPromoCodes'])->middleware('auth:admin');
    Route::post('promocode/add', [PromoCodeController::class, 'addPromoCode'])->middleware('auth:admin');
    Route::post('promocode/delete/{id}', [PromoCodeController::class, 'deletePromoCode'])->middleware('auth:admin');
    Route::post('promocode/update/{id}', [PromoCodeController::class, 'updatePromoCode'])->middleware('auth:admin');


    //Vendor
    Route::post('activate-vendor/{id}', [AdminController::class, 'activateVendor']);
    Route::post('suspend-vendor/{id}', [AdminController::class, 'suspendVendor']);
    Route::get('get-all-vendors', [AdminController::class, "getAllvendors"]);



    // Categoreis
});

Route::controller(VendorController::class)
    ->prefix("vendor")
    ->group(function () {
        Route::post("login", "loginVendor");
        Route::post("register", "registerVendor");
        Route::get("get-data", 'getAllData');
        Route::get("get-vendor-data", 'getVendorData');
        Route::post("update-vendor-data", "updateVendorData");
    });

// product Routes
Route::controller(ProductController::class)
    ->group(function () {
        // Product Routes
        Route::get("products", "getProducts")->prefix("vendor");
        Route::get("products/{id}", "getSingleProduct")->prefix("vendor");
        Route::get("products/images/{id}", "getImages");
        Route::patch("products/{id}", "updateProduct");
        Route::post("products", "createProduct");
        Route::delete("/products/{id}", "deleteProduct");

    });

//Search
Route::get('search', [SearchController::class, 'search']);

//Products
Route::get("products", [ProductController::class, "getAllProducts"]);
Route::get("products/{id}", [ProductController::class, "getSingleProductById"]);
Route::get("productsPages", [ProductController::class, "getProductsPerPage"]);
//Get payment methods
Route::get('payments', [PaymentController::class, 'getAllPayment']);
//Get Gategories
Route::get('categories', [CategoryController::class, 'index']);

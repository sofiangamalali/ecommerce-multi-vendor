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
    Route::post("login", [UserController::class, "loginUser"]);
    Route::post("register", [UserController::class, "registerUser"]);
    Route::resource('/cart', CartController::class)->middleware('auth:user');
    Route::resource('/rating', RatingController::class)->middleware('auth:user');
    //wishList
    Route::get('getwishlist', [WishListController::class, 'getUserWishlist'])->middleware('auth:user');
    Route::post('wishlist/add', [WishListController::class, 'addProductToWishlist'])->middleware('auth:user');
    Route::delete('wishlist/delete', [WishListController::class, 'deleteProductFromWishlist'])->middleware('auth:user');
    // write users routes
    Route::post('ratings', [RatingController::class, 'store'])->middleware('auth:user');


    //Get payment methods
    Route::get('payments' , [PaymentController::class ,'getAllPayment']);


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

    Route::resource('cart', CartController::class)->middleware('auth:admin');


    //PaymentMethods
    Route::get('payments' , [PaymentController::class ,'getAllPayment'])->middleware('auth:admin');
    Route::post('payment/create' , [PaymentController::class ,'createPayment'])->middleware('auth:admin');
    Route::patch('payment/update/{id}' , [PaymentController::class ,'updatePayment'])->middleware('auth:admin');
    Route::delete('payment/delete/{id}' , [PaymentController::class ,'deletePayment'])->middleware('auth:admin');

    //PromoCode
    Route::get('promocodes', [PromoCodeController::class, 'getPromoCodes'])->middleware('auth:admin');
    Route::post('promocode/add', [PromoCodeController::class, 'addPromoCode'])->middleware('auth:admin');
    Route::post('promocode/delete/{id}', [PromoCodeController::class, 'deletePromoCode'])->middleware('auth:admin');
    Route::post('promocode/update/{id}', [PromoCodeController::class, 'updatePromoCode'])->middleware('auth:admin');


    //Vendor
    Route::post('activate-vendor/{id}', [AdminController::class, 'activateVendor']);
    Route::post('suspend-vendor/{id}', [AdminController::class, 'suspendVendor']);



    // write admin routes
});

Route::controller(VendorController::class)
    ->prefix("vendor")
    ->group(function () {
        Route::post("login", "loginVendor");
        Route::post("register", "registerVendor");
        Route::get("get-data" ,'getAllData');
        Route::get("get-vendor-data" ,'getVendorData');
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
        Route::post("update-vendor-data", "updateVendorData");


        Route::get('/search', [SearchController::class, 'search']);
        Route::post("update-vendor-data", "updateVendorData");




    });

Route::get('/search', [SearchController::class, 'search']);
Route::resource('/category', CategoryController::class);

Route::get("products", [ProductController::class, "getAllProducts"]);
Route::get("products/{id}", [ProductController::class, "getSingleProductById"]);
Route::get("productsPages", [ProductController::class, "getProductsPerPage"]);

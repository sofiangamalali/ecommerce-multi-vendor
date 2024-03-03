<?php

use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\AdminController;
use App\Http\Controllers\api\JwtController;

use App\Http\Controllers\api\VendorController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;


Route::group(["prefix" => "user"], function () {
    Route::post("login", [UserController::class, "loginUser"]);
    Route::post("register", [UserController::class, "registerUser"]);
    // write users routes


});
Route::group(["prefix" => "admin"], function () {

    Route::post("login", [AdminController::class, "loginAdmin"]);
    Route::post("register", [AdminController::class, "registerAdmin"]);
    // write admin routes
});
// Route::group(["prefix" => "vendor"], function () {
Route::controller(VendorController::class)
    ->prefix("vendor")
    ->group(function () {
        // Route::post("login", [VendorController::class, "loginVendor"]);
        // Route::post("register", [VendorController::class, "registerVendor"]);
        Route::post("login", "loginVendor");
        Route::post("register", "registerVendor");

        // Product Routes
        Route::get("products", "getProducts");
        Route::get("products/{id}", "getSingleProduct");
        Route::patch("products/{id}", "updateProduct");
        Route::post("products", "createProduct");
        Route::delete("/products/{id}", "deleteProduct");
    });





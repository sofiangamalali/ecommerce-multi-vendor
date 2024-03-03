<?php

use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\AdminController;
use App\Http\Controllers\api\VendorController;
use App\Http\Controllers\api\JwtController;

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
Route::group(["prefix" => "vendor"], function () {
    Route::post("login", [VendorController::class, "loginVendor"]);
    Route::post("register", [VendorController::class, "registerVendor"]);
});
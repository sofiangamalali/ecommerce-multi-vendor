<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Vendor;

class VendorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:vendor', ['except' => ['loginVendor', 'registerVendor']]);
    }
    public function loginVendor($request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required | email',
            'password' => 'required | min:8'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        // try to login and if not valid user return false
        $token = auth('admin')->attempt($request->only('email', 'password'));
        if ($token) {
            $user = auth('admin')->user();
            $userToken = $user->createToken('AuthToken')->accessToken;

            return response()->json(['token' => $token, 'user' => $user], 200);

        }
        return response()->json(['error' => 'Invalid credentials'], 401);

    }
}

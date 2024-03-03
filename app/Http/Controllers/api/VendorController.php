<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function __construct()
    {
        # By default we are using here auth:api middleware
        $this->middleware('auth:vendor', ['except' => ['loginVendor', 'registerVendor']]);

    }
    public function loginVendor(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'required | email',
            'password' => 'required | min:8'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        // try to login and if not valid user return false
        $token = auth('vendor')->attempt($request->only('email', 'password'));
        if ($token) {
            $user = auth('vendor')->user();
            $userToken = $user->createToken('AuthToken')->accessToken;

            return response()->json(['token' => $token, 'user' => $user], 200);
        }
        return response()->json(['error' => 'Invalid credentials'], 401);

    }
    public function registerVendor(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'fname' => 'required |min:3 |string',
            'lname' => 'required |min:3 |string',
            'email' => 'required |email | unique:users,email',
            'password' => 'required | min:8',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $user = Vendor::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'password' => \Hash::make($request->input('password')),
        ]);


        return response()->json(['message' => "success", 'user' => $user], 200);



    }
}

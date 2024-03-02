<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Admin;

class AdminController extends Controller
{

    public function __construct()
    {
        
        $this->middleware('auth:admin', ['except' => ['loginAdmin' ,'registerAdmin']]);

    }
    public function loginAdmin(Request $request)
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

            return response()->json(['token' => $token,  'user' => $user], 200);
          
        }
        return response()->json(['error' => 'Invalid credentials'], 401);

    }
    public function registerAdmin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required |min:3 |string',
            'lname' => 'required |min:3 |string',
            'email' => 'required |email | unique:admins,email',
            'password' => 'required | min:8',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $user = Admin::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'password' => \Hash::make($request->input('password')),
           
        ]);


        return response()->json(['message' => "success", 'user' => $user], 200);



    }

}

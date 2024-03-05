<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\User;

class AuthController extends Controller
{

    public function __construct()
    {
        # By default we are using here auth:api middleware
        $this->middleware('auth:user', ['except' => ['login', 'register']]);

    }
    public function loginUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required | email',
            'password' => 'required | min:8'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        // try to login and if not valid user return false
        $token = auth('user')->attempt($request->only('email', 'password'));
        if ($token) {
            $user = auth('user')->user();
            $userToken = $user->createToken('AuthToken')->accessToken;
            return response()->json(['token' => $userToken], 200);
        }
        return response()->json(['error' => 'Invalid credentials'], 401);

    }
    public function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required |min:3 |string',
            'lname' => 'required |min:3 |string',
            'email' => 'required |email | unique:users,email',
            'password' => 'required | min:8',
            'phone_number' => 'required | number | max:11 |min:11',
            'birth_date' => 'required | date',
            'address' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $user = User::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'password' => \Hash::make($request->input('password')),
            'phone_number' => $request->input('phone_number'),
            'birth_date' => $request->input('birth_date'),
            'address' => $request->input('address'),
        ]);

        $token = auth('user')->attempt(['email' => $user->email, 'password' => $user->password]);
        $user = auth('user')->user();
        $userToken = $user->createToken('AuthToken')->accessToken;
        return response()->json(['user' => $user, 'token' => $userToken], 200);



    }

}

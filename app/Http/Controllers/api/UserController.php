<?php

namespace App\Http\Controllers\api;

use App\Mail\WelcomeMailForUser;
use App\Http\Controllers\Controller;
use App\Models\card;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        # By default we are using here auth:api middleware
        $this->middleware('auth:user', ['except' => ['loginUser', 'registerUser']]);

    }

    /**
     * Log in a user.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
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

            return response()->json(['token' => $token, 'user' => $user], 200);
        }
        return response()->json(['error' => 'Invalid credentials'], 401);

    }

    /**
     * Register a new user.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required |min:3 |string',
            'lname' => 'required |min:3 |string',
            'email' => 'required |email | unique:users,email',
            'password' => 'required | min:8',
            'phone_number' => 'required | string | max:11 |min:11',
            'birth_date' => 'required | string',
            'address' => 'required | string'
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

        $user->cart()->create();


        Mail::to($user->email)->send(new WelcomeMailForUser(['fname' => $user->fname, 'lname' => $user->lname]));
        return response()->json(['message' => "success", 'user' => $user], 200);
    }

    /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function showUser()
    {
        $user = auth('user')->user();

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        return response()->json(['user' => $user], 200);
    }

    /**
     * Update the specified user in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateUser(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'min:3|string',
            'lname' => 'min:3|string',
            'email' => 'email|unique:users,email',
            'password' => 'min:8',
            'phone_number' => 'string|max:11|min:11',
            'birth_date' => 'string',
            'address' => 'string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $user->update($request->all());

        return response()->json(['message' => 'User updated successfully', 'user' => $user], 200);
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted successfully'], 200);
    }

    /**
     * Get the orders associated with the authenticated user.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUserOrders()
    {
        // Retrieve the authenticated user
        $user = auth('user')->user();

        // Get the user's orders
        $orders = $user->orders()->get();

        // Return a JSON response with the user's orders
        return response()->json(['data' => $orders], 200);
    }

    /**
     * Cancel a specific order for the authenticated user.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id The ID of the order to be canceled
     * @return \Illuminate\Http\JsonResponse
     */
    public function cancelOrder(Request $request, $id)
    {
        $user = auth('user')->user();
        $order = $user->orders()->find($id);

        // Check if the order is already canceled
        if (!$order) {
            return response()->json(['message' => 'Order Not found'], 400);
        }
        if ($order->status === 'canceld') {
            return response()->json(['message' => 'The order is already canceld'], 400);
        }
        $order->update([
            'status' => 'canceld'
        ]);
        return response()->json(['message' => 'success']);
    }

    /**
     * Change the password for the authenticated user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function changePassword(Request $request)
    {
        // Retrieve the currently authenticated user
        $user = auth('user')->user();

        // Get the old and new passwords from the request
        $oldPassword = $request->input('oldPassword');
        $newPassword = $request->input('newPassword');

        // Hash the provided old password and compare it with the stored hashed password
        if (!\Hash::check($oldPassword, $user->password)) {
            // If the old password doesn't match, return an error response
            return response()->json(['message' => 'Invalid password'], 400);
        }

        // Update the user's password with the new hashed password
        $user->update([
            'password' => \Hash::make($newPassword)
        ]);

        return response()->json(['message' => 'Password Updated'], 200);
    }
}

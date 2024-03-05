<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;
use Validator;
use App\Models\Admin;
use App\Models\Product;

class AdminController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth:admin', ['except' => ['loginAdmin', 'registerAdmin']]);

        $this->middleware('auth:admin', ['except' => ['loginAdmin', 'registerAdmin']]);

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

            return response()->json(['token' => $token, 'user' => $user], 200);



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

    public function addPlan(Request $request)
    {
        $admin = auth('admin')->user();

        $data = $request->validate([
            'price' => $request->input('price'),
            'name' => $request->input('name'),
            'n_of_products' => $request->input('n_of_products'),
            'trans_fee' => $request->input('trans_fee'),
        ]);

        $plan = Plan::create([
            'price' => $data['price'],
            'name' => $data['name'],
            'n_of_products' => $data['n_of_products'],
            'trans_fee' => $data['trans_fee'],
            'admin_id' => $admin->id,
        ]);

        return response()->json([
            'message' => 'success',
            'plan' => $plan
        ], 200);
    }

    public function updatePlan(Request $request, $id)
    {
        $admin = auth('admin')->user();
        $plan = Plan::find($id);

        if (!$plan) {
            return response()->json(['message' => 'Plan not found'], 404);
        }

        // Validate the request data
        $data = $request->validate([
            'price' => $request->input('price'),
            'name' => $request->input('name'),
            'n_of_products' => $request->input('n_of_products'),
            'trans_fee' => $request->input('trans_fee'),
        ]);

        // Update plan attributes
        $plan->price = $data['price'];
        $plan->name = $data['name'];
        $plan->n_of_products = $data['n_of_products'];
        $plan->trans_fee = $data['trans_fee'];
        $plan->admin_id = $admin->id;

        $plan->save();

        return response()->json([
            'message' => 'Plan updated successfully',
            'plan' => $plan
        ], 200);
    }

    public function getPlan($id)
    {
        $plan = Plan::find($id);

        if (!$plan) {
            return response()->json(['message' => 'Plan not found'], 404);
        }

        return response()->json([
            'message' => 'Plan found',
            'plan' => $plan
        ], 200);
    }

    public function getAllPlans()
    {
        $plans = Plan::all();

        return response()->json([
            'plans' => $plans
        ], 200);
    }

    public function removePlan($id)
    {
        $plan = Plan::find($id);

        if (!$plan) {
            return response()->json(['message' => 'Plan not found'], 404);
        }

        $plan->delete();

        return response()->json(['message' => 'Plan removed successfully'], 200);
    }


}

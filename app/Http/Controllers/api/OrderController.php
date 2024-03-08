<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        # By default we are using here auth:api middleware
        $this->middleware('auth:user');

    }

    /**
     * Create a new order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        // Get the authenticated user
        $user = auth('user')->user();

        // Validate the request data
        $data = $request->validate([
            "status" => "required|string",
            'payment_method' => "required|string",
        ]);

        // Create a new order for the user
        $order = Order::create([
            "status" => $data['status'],
            "payment_method" => $data['payment_method'],
            "cart_id" => $user->cart->id,
            "user_id" => $user->id
        ]);

        // Return a JSON response with success status and the created order
        return response()->json(['status' => 'success', 'order' => $order]);
    }

    /**
     * Retrieve the order for the authenticated user.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show()
    {
        // Get the authenticated user
        $user = auth('user')->user();

        // Return a JSON response with success status and the user's order
        return response()->json([
            'status' => 'success',
            'order' => $user->order ?? "No order found"
        ]);
    }

    /**
     * Update the order for the authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Order $order)
    {
        // Get the authenticated user
        $user = auth('user')->user();

        // Retrieve the user's order
        $order = $user->order;

        if (!$order)
            return response()->json([
                'status' => 'Failure',
                'message' => "No Order Found",
            ]);
        // Validate the request data
        $data = $request->validate([
            'status' => 'required|string',
            'payment_method' => 'required|string',
        ]);

        // Update the order with the validated data
        $order->update($data);

        // Return a JSON response with success status and the updated order
        return response()->json([
            'status' => 'success',
            'order' => $order,
        ]);
    }

    /**
     * Delete the order for the authenticated user.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Order $order)
    {
        // Get the authenticated user
        $user = auth('user')->user();

        // Retrieve the user's order
        $order = $user->order;

        if (!$order)
            return response()->json([
                'status' => 'Failure',
                'message' => "No Order Found",
            ]);
        // Delete the user's order
        $order->delete();

        // Return a JSON response with success status and a message
        return response()->json([
            'status' => 'success',
            'message' => 'Order deleted successfully'
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Payment};

class PaymentController extends Controller
{



    public function getAllPayment()
    {
        return response()->json(['data' => Payment::all()], 200);
    }
    
    public function createPayment(Request $request)
    {
        // Assuming your Payment model has fields like 'name', 'amount', etc.
        $payment = Payment::create([
            'name' => $request->name,
            // Add other fields as needed
        ]);
    
        return response()->json(['message' => 'Payment method created successfully', 'data' => $payment], 201);
    }
    
    public function updatePayment(Request $request, $id)
    {
        $payment = Payment::find($id);
    
        if (!$payment) {
            return response()->json(['message' => 'Payment method does not exist'], 400);
        }
        
        $payment->update([
            'name' => $request->name,
          
        ]);
        $payment->save();
    
        return response()->json(['message' => 'Payment method updated successfully'], 200);
    }
    
    public function deletePayment($id)
    {
        $payment = Payment::find($id);
    
        if (!$payment) {
            return response()->json(['message' => 'Payment method does not exist'], 400);
        }
    
        $payment->delete();
    
        return response()->json(['message' => 'Payment method deleted successfully'], 200);
    }
}

<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PromoCode;
use Validator;

class PromoCodeController extends Controller
{


    public function getPromoCodes()
    {
        $promoCodes = PromoCode::get();


        return response()->json(['promoCodes' => $promoCodes], 200);

    }
    public function addPromoCode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|unique:promo_codes,code',
            'percentage' => 'required|numeric|min:0|max:100',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $promoCode = new PromoCode([
            'code' => $request->input('code'),
            'percentage' => $request->input('percentage'),

        ]);
        $promoCode->save();
        return response()->json(['message' => 'Promo code added successfully'], 201);
    }

    public function updatePromoCode(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'unique:promo_codes,code',
            'percentage' => 'numeric|min:0|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $promoCode = PromoCode::find($id);

        if (!$promoCode) {
            return response()->json(['error' => 'Promo code not found'], 404);
        }

        $promoCode->update($request->all(), [
            'code' => $request->input('code') ?? $promoCode->code,
            'percentage' => $request->input('percentage') ?? $promoCode->percentage,
        ]);


        $promoCode->save();

        return response()->json(['message' => 'Promo code updated successfully'], 200);
    }
    public function deletePromoCode($id)
    {

        $promoCode = PromoCode::find($id);
        if (!$promoCode) {
            return response()->json(['error' => 'Promo code not found'], 404);
        }
        $promoCode->delete();

        return response()->json(['message' => 'Promo code deleted successfully'], 200);
    }


}

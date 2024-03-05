<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Validator;


class VendorController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth:vendor', ['except' => ['loginVendor', 'registerVendor']]);

    }

    public function loginVendor(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required | email',
            'password' => 'required | min:8'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        // try to login and if not valid user return false
        $token = auth('vendor')->attempt($request->only('email', 'password'));
        if ($token) {
            $vendor = auth('vendor')->user();
            $vendorToken = $vendor->createToken('AuthToken')->accessToken;
            return response()->json(['token' => $token, 'user' => $vendor], 200);

        }
        return response()->json(['error' => 'Invalid credentials'], 401);

    }
    public function registerVendor(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required|min:3|string',
            'lname' => 'required|min:3|string',
            'business_name' => 'required|min:3',
            'email' => 'required|email|unique:vendors,email',
            'phone_number' => 'required|unique:vendors,phone_number|max:11|min:11',
            'password' => 'required|min:8',
            'id_photo_front' => 'file|image|mimes:jpeg,png,jpg,gif',
            'id_photo_back' => 'file|image|mimes:jpeg,png,jpg,gif',
            'logo_pic' => 'file|image|mimes:jpeg,png,jpg,gif',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        
        $vendor = new Vendor();
        $vendor->fname = $request->input('fname');
        $vendor->lname = $request->input('lname');
        $vendor->email = $request->input('email');
        $vendor->business_name = $request->input('business_name');
        $vendor->phone_number = $request->input('phone_number');
        $vendor->password = \Hash::make($request->input('password'));
        $vendor->is_active = false;
        $vendor->save();

        // get the vendor id to store the images with the id of its vendor .
        $vendorId = $vendor->id;

        if ($request->hasFile('id_photo_front')) {
            $imageNameWithExtension = $vendorId . '_' . 'id_photo_front' . '.' . $request->file('id_photo_front')->getClientOriginalExtension();
            $request->file('id_photo_front')->move('vendor_images', $imageNameWithExtension);
            $vendor->id_photo_front =  env('APP_URL') . ':8000' .'/vendor_images/' . $imageNameWithExtension;
        }


        if ($request->hasFile('id_photo_back')) {
            $imageNameWithExtension = $vendorId . '_' . 'id_photo_back' . '.' . $request->file('id_photo_back')->getClientOriginalExtension();
            $request->file('id_photo_back')->move('vendor_images', $imageNameWithExtension);
            $vendor->id_photo_back = env('APP_URL') . ':8000' . '/vendor_images/' . $imageNameWithExtension;
        }

        if ($request->hasFile('logo_pic')) {
            $imageNameWithExtension = $vendorId . '_' . 'logo_pic' . '.' . $request->file('logo_pic')->getClientOriginalExtension();
            $request->file('logo_pic')->move('vendor_images', $imageNameWithExtension);
            $vendor->logo_pic =  env('APP_URL') . ':8000' .'/vendor_images/' . $imageNameWithExtension;
        }
        $vendor->save();
        return response()->json(['message' => 'Vendor registered successfully'], 201);
    }

   
}

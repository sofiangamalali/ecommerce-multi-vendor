<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\{Vendor};
use App\Models\Plan;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\Mail\WelcomeMailForVendor;


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
            'id_photo_front' => 'required| file|image|mimes:jpeg,png,jpg,gif',
            'id_photo_back' => 'required |file|image|mimes:jpeg,png,jpg,gif',
            'logo_pic' => 'required|file|image|mimes:jpeg,png,jpg,gif',
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
        $vendor->plan_id = $request->input('plan_id') ?? 1;
        $vendor->save();

        // get the vendor id to store the images with the id of its vendor .
        $vendorId = $vendor->id;

        if ($request->hasFile('id_photo_front')) {
            $imageNameWithExtension = $vendorId . '_' . 'id_photo_front' . '.' . $request->file('id_photo_front')->getClientOriginalExtension();
            $request->file('id_photo_front')->move('vendor_images', $imageNameWithExtension);
            $vendor->id_photo_front = env('APP_URL') . ':8000' . '/vendor_images/' . $imageNameWithExtension;
        }


        if ($request->hasFile('id_photo_back')) {
            $imageNameWithExtension = $vendorId . '_' . 'id_photo_back' . '.' . $request->file('id_photo_back')->getClientOriginalExtension();
            $request->file('id_photo_back')->move('vendor_images', $imageNameWithExtension);
            $vendor->id_photo_back = env('APP_URL') . ':8000' . '/vendor_images/' . $imageNameWithExtension;
        }

        if ($request->hasFile('logo_pic')) {
            $imageNameWithExtension = $vendorId . '_' . 'logo_pic' . '.' . $request->file('logo_pic')->getClientOriginalExtension();
            $request->file('logo_pic')->move('vendor_images', $imageNameWithExtension);
            $vendor->logo_pic = env('APP_URL') . ':8000' . '/vendor_images/' . $imageNameWithExtension;
        }
        $vendor->save();

        Mail::to($vendor->email)->send(new WelcomeMailForVendor(['fname' => $vendor->fname, 'lname' => $vendor->lname]));
        return response()->json(['message' => 'Vendor registered successfully'], 201);

    }

    public function updateVendorData(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fname' => 'min:3|string',
            'lname' => 'min:3|string',
            'businessname' => 'min:3',
            'email' => 'email|unique:vendors,email',
            'phone_number' => 'unique:vendors,phone_number|max:11|min:11',
            'logo_pic' => 'file|image|mimes:jpeg,png,jpg,gif',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $vendor = auth('vendor')->user();
        $vendor->update([
            'fname' => $request->input('fname') ?? $vendor->fname,
            'lname' => $request->input('lname') ?? $vendor->lname,
            'business_name' => $request->input('business_name') ?? $vendor->business_name,
            'email' => $request->input('email') ?? $vendor->email,
            'phone_number' => $request->input('phone_number') ?? $vendor->phone_number,
        ]);
        if ($request->hasFile('logo_pic')) {
            $imageNameWithExtension = $vendor->id . '' . 'logo_pic' . '.' . $request->file('logo_pic')->getClientOriginalExtension();
            $request->file('logo_pic')->move('vendor_images', $imageNameWithExtension);
            $vendor->logo_pic = env('APP_URL') . ':8000' . '/vendor_images/' . $imageNameWithExtension;
        }
        $vendor->save();
        return response()->json(['message' => 'Vendor Data Updated Successfully'], 200);
    }



    public function getAllData()
    {
        $vendor = auth('vendor')->user();
        $products = $vendor->products->all();
        $ratings = [];
        $ratingsCount = 0;

        foreach ($products as $product) {
            $DBproduct = Product::find($product->id);
            $DBratings = $DBproduct->rating->all();
            if (count($DBratings) > 0)
                $ratings[$product->id] = $DBratings;
            $ratingsCount += $DBproduct->getRatingCount();
        }

        return response()->json(
            [
                "message" => "success",
                "data" => [
                    'numberOfProducts' => $vendor->products()->count(),
                    'plan' => Plan::find($vendor->plan_id)->name,
                    'business_name' => $vendor->business_name,
                    'accountStatus' => $vendor->is_active ? 'Verified' : 'Suspended',
                    'ratings' => $ratings,
                    'ratingsCount' => $ratingsCount,
                ]
            ],
            200
        );
    }
    public function getVendorData(){
        $vendor = auth('vendor')->user();

        $vendorData= Vendor::find($vendor->id);

        return response()->json(['data' => $vendorData],200);
        
    }

    public function getProductRatings($productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            // Handle the case where the product is not found
            return response()->json(['error' => 'Product not found'], 404);
        }

        $ratings = [
            'ratings' => $product->ratings,
            'ratingsCount' => $product->accurateRatingCount,
        ];

        return response()->json($ratings);
    }

  

}

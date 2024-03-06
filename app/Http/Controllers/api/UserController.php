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

            return response()->json(['token' => $token,  'user' => $user], 200);
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


        Mail::to($user->email)->send(new WelcomeMailForUser(['fname'=>$user->fname , 'lname'=>$user->lname]));
        return response()->json(['message' => "success", 'user' => $user], 200);
    }


    /**
     * Adds a new card for the authenticated user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addCard(Request $request)
    {
        $user = auth('user')->user();
        // Get data from the request
        $data = $request->all();

        $card = card::create([
            "user_id" => $user->id,
            "card_number" => $data['card_number'],
            "holder_name" => $data["holder_name"],
            "expired_date" => $data['expired_date'],
        ]);

        if (!$card)
            return response()->json(['message' => "Could not create card"], 401);

        return response()->json(["message" => "Success", "card" => $card], 201);
    }

    /**
     * Removes a card for the authenticated user.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function removeCard(Request $request, $id)
    {
        $user = auth("user")->user();
        $card = $this->findCard($id);

        if ($card->user->id !== $user->id)
            return response()->json(['message' => "Not the card owner"]);

        try {
            $card->delete();
        } catch (Exception $e) {
            return response()->json(["message" => "Error removing card"], 500);
        }

        return response()->json(["message" => "Card removed successfully", "card" => $card], 200);
    }

    /**
     * Updates a card for the authenticated user.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateCard(Request $request, $id)
    {
        // Get user and card info
        $user = auth("user")->user();
        try {
            $card = $this->findCard($id);
        } catch (Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
        $data = $request->all();

        // dd($card);

        if ($card->user->id !== $user->id)
            return response()->json(['message' => "Not the card owner"]);

        try {
            $card->update($data);
        } catch (Exception $e) {
            return response()->json(["message" => "Error updating card"], 500);
        }

        return response()->json([
            "message" => "Card updated successfully",
            "newCard" => $card
        ]);
    }

    /**
     * Retrieves a specific card for the authenticated user.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCard($id)
    {
        $user = auth("user")->user();
        $card = $this->findCard($id);

        try {
            $card = $this->findCard($id);
        } catch (Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }

        if ($card->user->id !== $user->id)
            return response()->json(['message' => "Not the card owner"]);

        return response()->json([
            'message' => "Card found",
            "card" => $card
        ], 200);
    }

    /**
     * Retrieves all cards for the authenticated user.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllCards()
    {
        $user = auth("user")->user();
        $cards = card::where("user_id", $user->id)->get();

        return response()->json([
            "cards" => $cards
        ], 200);
    }


    /**
     * @param $id the id of the card
     *
     * @return \App\Models\card;
     */
    private function findCard($id)
    {
        $card = card::find($id);

        if (!$card)
            throw new Exception("card not found");


        return $card;
    }


}

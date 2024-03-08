<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\card;
use Exception;

class CardController extends Controller
{
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

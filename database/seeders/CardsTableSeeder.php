<?php

namespace Database\Seeders;

use App\Models\card;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a user
        $user = User::create([
            'fname' => 'John',
            'lname' => 'Doe',
            'email' => 'johhn.doe@example.com',
            'password' => \Hash::make('password123'),
            'phone_number' => '1234567890',
            'birth_date' => '1990-01-01',
            'address' => '123 Main St, City, Country',
        ]);
        // Create a card for the user
        card::create([
            'user_id' => $user->id,
            'card_number' => '1234567890123456',
            'holder_name' => 'John Doe',
            'expired_date' => now()->addYears(1), // or any other expiration date
        ]);
    }
}

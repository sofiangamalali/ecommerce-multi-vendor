<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('your_table_name')->insert([
            'fname' => 'John',
            'lname' => 'Doe',
            'business_name' => 'Example Business',
            'email' => 'john@example.com',
            'phone_number' => '123456789',
            'password' => \Hash::make('password'),
            'id_photo_front' => 'path/to/id_photo_front.jpg',
            'id_photo_back' => 'path/to/id_photo_back.jpg',
            'logo_pic' => 'path/to/logo_pic.jpg',
            'is_active' => 1, // Set to 1 for active, 0 for inactive
            'created_at' => now(),
            'updated_at' => now(),
            'plan_id' => 1, // Replace with the appropriate plan_id
        ]);
    }
}

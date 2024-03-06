<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'fname' => 'John',
                'lname' => 'Doe',
                'email' => 'john.doe@example.com',
                'password' => bcrypt('password123'),
                'phone_number' => '1234567890',
                'birth_date' => '1990-01-15',
                'address' => '123 Main St, Cityville',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fname' => 'Jane',
                'lname' => 'Doe',
                'email' => 'jane.doe@example.com',
                'password' => bcrypt('password456'),
                'phone_number' => '9876543210',
                'birth_date' => '1985-05-20',
                'address' => '456 Oak St, Townsville',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more data as needed
        ];

        // Insert data into the "users" table
        \DB::table('users')->insert($data);
    }
}

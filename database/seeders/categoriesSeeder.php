<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Seed data for your_table_name
        $data = [
            [
                'name' => 'Example 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Example 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more data as needed
        ];

        // Insert data into the your_table_name table
        \DB::table('categories')->insert($data);

    }
}

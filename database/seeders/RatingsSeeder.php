<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numberOfRecords = 5;

        for ($i = 1; $i <= $numberOfRecords; $i++) {
            \DB::table('ratings')->insert([
                'product_id' => 27, // Adjust the range based on your actual data
                'rate' => rand(1, 5),
                'review' => "This is review $i for the product.",
            ]);
        }
    }
}

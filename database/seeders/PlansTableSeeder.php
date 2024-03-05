<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data for plans
        $plans = [
            [
                'price' => 29.99,
                'name' => 'Basic Plan',
                'n_of_products' => 50,
                'trans_fee' => 2.50,
            ],
            [
                'price' => 49.99,
                'name' => 'Standard Plan',
                'n_of_products' => 100,
                'trans_fee' => 1.50,
            ],
        ];

        // Insert the sample data into the plans table
        \DB::table('plans')->insert($plans);
    }
}

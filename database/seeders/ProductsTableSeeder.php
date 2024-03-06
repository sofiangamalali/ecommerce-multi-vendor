<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'vendor_id' => 1,
                'product_name' => 'Sample Product 1',
                'price' => 50.00,
                'discount' => 5.00,
                'stock' => 100,
                'is_on_sale' => 1,
                'cart_id' => 5,
                'category_id' => 1,
            ],
            [
                'vendor_id' => 1,
                'product_name' => 'Sample Product 2',
                'price' => 75.00,
                'discount' => 10.00,
                'stock' => 50,
                'is_on_sale' => 0,
                'cart_id' => 5,
                'category_id' => 1,
            ],
            // Add more sample products as needed
        ];

        // Insert the sample data into the products table
        DB::table('products')->insert($products);
    }
}

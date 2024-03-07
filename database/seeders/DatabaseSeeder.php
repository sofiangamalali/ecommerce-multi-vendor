<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(UsersSeeder::class);
        $this->call(CardsTableSeeder::class);
        $this->call(categoriesSeeder::class);
        $this->call(PlansTableSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(RatingsSeeder::class);

    }
}

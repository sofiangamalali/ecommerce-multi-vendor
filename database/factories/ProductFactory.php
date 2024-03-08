<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'vendor_id' => 1,
            'product_name' => $this->faker->name(),
            'price' => $this->faker->numberBetween(10, 1000),
            'discount' => 0,
            'stock' => $this->faker->numberBetween(10, 20),
            'is_on_sale' =>  0,
            'category_id' => $this->faker->numberBetween(1, 2),
            'descreption' => $this->faker->text(200)

        ];
    }
}

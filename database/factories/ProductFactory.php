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
    public function definition()
    {
        return [
            'product_name'=>$this->faker->name(),
            'product_price'=>$this->faker->numberBetween(100,1000),
            'user_id'=>$this->faker->numberBetween(1,10),

        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Category;
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
            "name"=>fake()->word(),
            "desc"=>fake()->paragraph(),
            "price"=>fake()->randomFloat(),
            "image"=>"/images/OIP1.jpeg",
            "category_id" => Category::factory(),
        ];
    }
}

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
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'description' => fake()->text(),
            'category_id' => fake()->numberBetween(1, 10),
            'jenis' => fake()->randomElement(['barang', 'jasa']),
            'price' => fake()->numberBetween(10000, 100000),
            'stock' => fake()->numberBetween(1, 100),
            'image' => fake()->imageUrl(),
            'user_id' => fake()->numberBetween(1, 10),
        ];
    }
}

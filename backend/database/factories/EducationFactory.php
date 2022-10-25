<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
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
            'type' => fake()->randomElement(['edukasi-bertani', 'edukasi-berniaga', 'lahan-bertani', 'inovasi-bertani']),
            'image' => fake()->imageUrl(),
            'description' => fake()->text(),
            'content' => fake()->text(),
            'video' => fake()->text(),
        ];
    }
}

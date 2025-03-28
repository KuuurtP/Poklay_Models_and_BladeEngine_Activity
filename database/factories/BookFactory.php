<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isbn' => fake()->name(),
            'title' => fake()->name(),
            'author' => fake()->name(),
            'description' => fake()->sentence(),
            'date_published' => now(),
            'remember_token' => Str::random(20),
        ];
    }
}

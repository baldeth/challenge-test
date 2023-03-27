<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Challenge>
 */
class ChallengeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $title =  fake()->words(2, true),
            'slug' => Str::slug($title) . '-' . now()->getPreciseTimestamp(3),
            'image' => fake()->imageUrl(),
            'level' => fake()->randomElement(['Low', 'Medium', 'High', 'Super-high']),
            'description' => fake()->paragraph(3, true),
            'user_id' => User::query()->inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id
        ];
    }
}

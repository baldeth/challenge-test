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
            'title' => $title =  fake()->words(nb: 2, asText: true),
            'slug' => Str::slug($title) . '-' . now(),
            'image' => fake()->imageUrl(),
            'level' => fake()->randomElement( array: ['Low', 'Medium', 'High', 'Super-high']),
            'description' => fake()->paragraph(variableNbSentences: true),
            'user_id'=> User::factory(),
            'category_id'=> Category::factory()
        ];
    }
}

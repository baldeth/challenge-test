<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Challenge;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Challenge::factory(10)->create();

        User::factory()->create([
            'name' => 'Thierno Amadou Oury Balde',
            'email' => 'admin@email.com',
        ]);

        User::factory()
            ->count(10)
            ->has(
                Challenge::factory()->count(3)
                ->has(Category::factory())
            )->create();
    }
}

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
        $this->call(CategorySeeder::class);

        User::factory()->create([
            'name' => 'Thierno Amadou Oury Balde',
            'email' => 'admin@email.com',
        ]);

        Challenge::factory()
            ->count(100)
            ->create();
    }
}

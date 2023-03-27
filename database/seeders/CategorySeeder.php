<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => $name = 'HTML & CSS',
            'slug' => str()->slug($name) . '-' . now()->getPreciseTimestamp(3)
        ]);
        DB::table('categories')->insert([
            'name' => $name = 'PHP & LARAVEL',
            'slug' => str()->slug($name) . '-' . now()->getPreciseTimestamp(3)
        ]);
        DB::table('categories')->insert([
            'name' => $name = 'JAVASCRIPT & TYPESCRIPT',
            'slug' => str()->slug($name) . '-' . now()->getPreciseTimestamp(3)
        ]);
        DB::table('categories')->insert([
            'name' => $name = 'PYTHON & DJANGO',
            'slug' => str()->slug($name) . '-' . now()->getPreciseTimestamp(3)
        ]);
        DB::table('categories')->insert([
            'name' => $name = 'NODE JS',
            'slug' => str()->slug($name) . '-' . now()->getPreciseTimestamp(3)
        ]);
        DB::table('categories')->insert([
            'name' => $name = 'REACT & VUE',
            'slug' => str()->slug($name) . '-' . now()->getPreciseTimestamp(3)
        ]);
        DB::table('categories')->insert([
            'name' => $name = 'MYSQL',
            'slug' => str()->slug($name) . '-' . now()->getPreciseTimestamp(3)
        ]);
    }
}

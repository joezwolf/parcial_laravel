<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        \App\Models\Category::factory(10)->create()->each(function ($category) {
            \App\Models\Videojuego::factory(5)->create([
                'category_id' => $category->id,
            ]);
        });
    }
}

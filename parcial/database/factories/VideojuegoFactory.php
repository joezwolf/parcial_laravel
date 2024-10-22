<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Videojuego;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Videojuego>
 */
class VideojuegoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Videojuego::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'precio' => $this->faker->randomFloat(2, 5, 100),
            'fecha_lanzamiento' => $this->faker->date,
            'disponible' => $this->faker->boolean,
            'rating' => $this->faker->randomFloat(1, 1, 5),
            'genero' => $this->faker->word,
            'plataformas' => $this->faker->word,
            'category_id' => Category::factory(), // Asegúrate de tener esta relación configurada
        ];
    }
}

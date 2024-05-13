<?php

namespace Database\Factories;

use App\Models\Categoria_proyecto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria_proyecto>
 */
class Categoria_proyectoFactory extends Factory
{
    protected $model = Categoria_proyecto::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            //
            'nombre' => $this->faker->word,
            'descripcion' =>$this->faker->realText(200),
        ];
    }
}

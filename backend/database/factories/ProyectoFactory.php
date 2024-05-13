<?php

namespace Database\Factories;

use App\Models\Categoria_proyecto;
use App\Models\Proyecto;
use App\Models\Duenio;
use App\Models\Gerente_comercial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proyecto>
 */
class ProyectoFactory extends Factory
{
    protected $model = Proyecto::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $duenios = Duenio::pluck('id')->toArray();
        $gerentes = Gerente_comercial::pluck('id')->toArray();
        $categorias_proyecto = Categoria_proyecto::pluck('id')->toArray();
        return [
            'duenio_id' => $this->faker->randomElement($duenios), // Dejar el id_duenio como null para ser establecido después
            'gerente_comercial_id' => $this->faker->randomElement($gerentes), // Dejar el id_duenio como null para ser establecido después
            'id_categoria_proyecto' => $this->faker->randomElement($categorias_proyecto), // Dejar el id_categoria_proyecto como null para ser establecido después
            'nombre' => $this->faker->sentence,
            'departamento' => $this->faker->state,
            'ciudad' => $this->faker->city,
            'direccion' => $this->faker->address,
            'fecha_inicio' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'activo' => $this->faker->boolean(90), // 90% de probabilidad de estar activo
        ];
    }
}

<?php

namespace Database\Factories;
use App\Models\Gerente_comercial;
use App\Models\Duenio;
use App\Models\Proyecto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gerente_comercial>
 */
class Gerente_comercialFactory extends Factory
{
    protected $model = Gerente_comercial::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $duenios = Duenio::pluck('id')->toArray();
        return [
            'duenio_id' => $this->faker->randomElement($duenios),
            'nombre' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'usuario' => $this->faker->userName,
            'num_doc' => $this->faker->randomNumber(8),
            'tipo_doc' => $this->faker->randomElement([1, 2]),
            'correo' => $this->faker->unique()->safeEmail,
            'contrasenia' => bcrypt('password123'), // Puedes ajustar la contraseña aquí
            'telefono' => $this->faker->phoneNumber,
            'activo' => $this->faker->boolean(90), // 90% de probabilidad de estar activo
        ];
    }
}

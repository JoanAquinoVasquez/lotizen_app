<?php

namespace Database\Factories;

use App\Models\Duenio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class DuenioFactory extends Factory
{
    protected $model = Duenio::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'usuario' => $this->faker->userName,
            'num_doc' => $this->faker->randomNumber(8),
            'tipo_doc' => $this->faker->randomElement([1, 2]),
            'correo' => $this->faker->unique()->safeEmail,
            'telefono' => $this->faker->phoneNumber,
            'contrasenia' => bcrypt('password123'), // Siempre genera la misma contraseña por ejemplo
        ];
    }
}

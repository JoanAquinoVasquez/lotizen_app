<?php

namespace Database\Factories;
use App\Models\Rubro;
use App\Models\Duenio;
use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    protected $model = Empresa::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rubros = Rubro::pluck('id')->toArray(); // Obtener todos los IDs de rubros existentes
        $duenios = Duenio::pluck('id')->toArray(); // Obtener todos los IDs de rubros existentes
        $randomBlobData = base64_encode(random_bytes(1024));
        return [
            'id_rubro' => $this->faker->randomElement($rubros), // Genera un ID de rubro aleatorio
            'id_duenio' => $this->faker->randomElement($duenios), // Genera un ID de dueño aleatorio
            'nombre' => $this->faker->company, // Genera un nombre de empresa aleatorio
            'ruc' => substr($this->faker->unique()->numerify('############'), 0, 11), // Genera un RUC aleatorio de 11 dígitos
            'logo' => $randomBlobData, // Genera una URL de imagen aleatoria
        ];
    }
}

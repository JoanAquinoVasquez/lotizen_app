<?php

namespace Database\Seeders;

use App\Models\Categoria_proyecto;
use App\Models\Duenio;
use App\Models\Rubro;
use App\Models\Empresa;
use App\Models\Proyecto;
use App\Models\Gerente_comercial;
use App\Models\ProyectoxGerente;
use Database\Factories\ProyectoGerenteComercialFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Duenio::factory()->count(10)->create();
        Rubro::factory()->count(10)->create();
        Empresa::factory()->count(10)->create();
        Categoria_proyecto::factory()->count(10)->create();
        Gerente_comercial::factory()->count(10)->create();
        Proyecto::factory()->count(10)->create();
        
        
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

<?php

namespace Tests\Feature;

use App\Models\Categoria_proyecto;
use Tests\TestCase;
use App\Models\Duenio; 
use App\Models\Gerente_comercial;
use App\Models\Empresa;
use App\Models\Proyecto;
use App\Models\Rubro; 

class ExampleTest extends TestCase
{


    public function testCategoria_proyecto()
    {
        // Datos de ejemplo para el dueño
        $datosCategoria_proyecto = [
            'nombre' => 'Lotes',
        ];

        // Crear un nuevo dueño en la base de datos
        $categoria_proyecto = Categoria_proyecto::create($datosCategoria_proyecto);
    }

    public function testProyecto()
    {
        // Datos de ejemplo para el dueño
        $datosProyecto = [
            'nombre' => 'Lotizen',
            'departamento' => 'Lambayeque',
            'ciudad' => 'Chiclayo',
            'direccion' => 'Los dulantos N° 202',
            'fecha_inicio' => '12/09/2023',
            'activo' => '0',
            'id_duenio' => 2,
            'id_categoria_proyecto' => 1,
        ];

        // Crear un nuevo dueño en la base de datos
        $proyecto = Proyecto::create($datosProyecto);
    } 

    public function testCrearGerente_comercial()
    {
        // Datos de ejemplo para el dueño
        $datosGerente_comercial = [
            'id_proyecto' => '1',
            'nombre' => 'Sttefany Naghely',
            'apellidos' => 'Santamaría Oblitas',
            'usuario' => 'ssantamariao',
            'num_doc' => '1234567',
            'tipo_doc' => 1, // Supongamos que 1 representa un tipo de documento específico
            'correo' => 'ssantamariao@gmail.com',
            'contrasenia' => bcrypt('ssantamariao'), // Usamos bcrypt para cifrar la contraseña
            'telefono' => '123456789',
            'activo'=>0,
        ];

        // Crear un nuevo dueño en la base de datos
        $gerente_comercial = Gerente_comercial::create($datosGerente_comercial);
    }

   
    


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellidos',
        'telefono',
        'correo',
        'genero',
        'tipo_doc',
        'num_doc',
        'fecha_nac',
        'direccion',
        'pais',
        'ingresos',
        'soltero',
        'carga_familiar',
        'nivel_estudio',
        'fecha_contacto',
        'disponible',
    ];
}

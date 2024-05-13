<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    protected $table = 'inmueble';
    use HasFactory;

    protected $fillable = [
        'id_bloque',
        'id_categoria_inmueble',
        'precio',
        'locacion',
        'numero',
        'agua',
        'servicio_luz',
        'estado',
    ];

    // Puedes agregar relaciones u otros métodos aquí si es necesario.

    public function bloque()
    {
        return $this->belongsTo(Bloque::class, 'id_bloque');
    }

    public function categoriaInmueble()
    {
        return $this->belongsTo(CategoriaInmueble::class, 'id_categoria_inmueble');
    }
}

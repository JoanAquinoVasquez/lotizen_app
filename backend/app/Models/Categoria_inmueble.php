<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria_inmueble extends Model
{
    protected $table = 'categoria_inmueble';
    use HasFactory;
    
    protected $fillable = [
        'nombre',
        'descripcion',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria_proyecto extends Model
{
    protected $table = 'categoria_proyecto';
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
    ];


}

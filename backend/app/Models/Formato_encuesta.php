<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formato_encuesta extends Model
{
    protected $table = 'formato_encuesta';
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'titulo',
        'estado',
    ];
}

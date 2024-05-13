<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'pregunta';
    use HasFactory;

    protected $fillable = [
        'id_formato_encuesta',
        'peso',
        'enunciado',
        'tipo_pregunta',
    ];

    // Define la relación con el modelo FormatoEncuesta
    public function formatoEncuesta()
    {
        return $this->belongsTo(Formato_encuesta::class, 'id_formato_encuesta', 'id');
    }
}

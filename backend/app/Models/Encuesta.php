<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $table = 'encuesta';
    use HasFactory;

    protected $fillable = [
        'id_cliente',
        'id_evaluacion',
        'id_formato_encuesta',
        'fecha',
    ];

    // Define las relaciones con los modelos Cliente, Evaluacion y FormatoEncuesta
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id');
    }

    public function evaluacion()
    {
        return $this->belongsTo(Evaluacion::class, 'id_evaluacion', 'id');
    }

    public function formatoEncuesta()
    {
        return $this->belongsTo(FormatoEncuesta::class, 'id_formato_encuesta', 'id');
    }


}

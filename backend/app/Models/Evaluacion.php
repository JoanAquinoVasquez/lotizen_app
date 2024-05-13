<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = 'evaluacion';
    use HasFactory;

    protected $fillable = [
        'id_asesor',
        'calificacion',
        'fecha_inicio',
        'fecha_fin',
    ];

    // Define la relación con el modelo Asesor
    public function asesor()
    {
        return $this->belongsTo(Asesor::class, 'id_asesor', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    protected $table = 'visita';
    use HasFactory;


    protected $fillable = [
        'id_asignacion_cliente',
        'fecha',
        'hora',
        'horas_duracion',
        'mov_particular',
        'observacion',
    ];

    // Define la relación con el modelo AsignacionCliente
    public function asignacionCliente()
    {
        return $this->belongsTo(AsignacionCliente::class, 'id_asignacion_cliente', 'id');
    }
}

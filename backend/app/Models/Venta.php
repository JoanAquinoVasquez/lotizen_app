<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{

    use HasFactory;

    protected $table = 'venta'; // Especifica el nombre de la tabla en la base de datos

    protected $fillable = [
        'id_inmueble',
        'id_asesor',
        'id_cliente',
        'fecha',
        'credito',
        'estado',
    ];

    // Define las relaciones con otros modelos
    public function inmueble()
    {
        return $this->belongsTo(Inmueble::class, 'id_inmueble', 'id');
    }

    public function asesor()
    {
        return $this->belongsTo(Asesor::class, 'id_asesor', 'id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id');
    }
}

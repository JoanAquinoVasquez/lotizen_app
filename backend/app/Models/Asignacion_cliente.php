<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion_cliente extends Model
{
    protected $table = 'asignacion_cliente'; 
    use HasFactory;

    protected $fillable = [
        'id_asesor',
        'id_cliente',
        'id_num_venta',
        'fecha_asignacion',
        'vigente',
    ];

    // Define las relaciones con los modelos Asesor, Cliente y Venta
    public function asesor()
    {
        return $this->belongsTo(Asesor::class, 'id_asesor', 'id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id');
    }

    public function venta()
    {
        return $this->belongsTo(Venta::class, 'id_num_venta', 'num_venta');
    }



}

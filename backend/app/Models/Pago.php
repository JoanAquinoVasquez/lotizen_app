<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pago';
    use HasFactory;

    protected $fillable = [
        'id_num_venta',
        'monto',
        'num_comprobante',
        'comprobante',
        'tipo',
        'fecha_pactada',
        'fecha_comprobante',
    ];

    // Define la relación con el modelo Venta
    public function venta()
    {
        return $this->belongsTo(Venta::class, 'id_num_venta', 'num_venta');
    }
}

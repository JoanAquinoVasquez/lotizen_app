<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta_asesor extends Model
{
    protected $table = 'meta_asesor';
    use HasFactory;

    protected $fillable = [
        'id_asesor',
        'fecha_inicio',
        'fecha_fin',
        'num_lotes',
        'porcentaje_alcanzado',
        'activo',
    ];

    // Define la relación con el modelo Asesor
    public function asesor()
    {
        return $this->belongsTo(Asesor::class, 'id_asesor', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta_proyecto extends Model
{
    protected $table = 'meta_proyecto';
    use HasFactory;

    protected $fillable = [
        'id_gerente_comercial',
        'fecha_inicio',
        'fecha_fin',
        'num_lotes',
        'porcentaje_alcanzado',
        'activo',
    ];

    // Puedes agregar relaciones u otros métodos aquí si es necesario.

    public function gerenteComercial()
    {
        return $this->belongsTo(GerenteComercial::class, 'id_gerente_comercial');
    }
}

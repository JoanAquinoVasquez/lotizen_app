<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta_supervisor extends Model
{
    protected $table = 'meta_supervisor';
    use HasFactory;
    

    protected $fillable = [
        'id_supervisor',
        'fecha_inicio',
        'fecha_fin',
        'num_lotes',
        'porcentaje_alcanzado',
        'activo',
    ];

    // Puedes agregar relaciones u otros métodos aquí si es necesario.

    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class, 'id_supervisor');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    protected $table = 'asesor';
    use HasFactory;

    protected $fillable = [
        'id_supervisor',
        'nombre',
        'apellidos',
        'usuario',
        'num_doc',
        'tipo_doc',
        'correo',
        'contrasenia',
        'telefono',
        'activo',
        'externo',
    ];

    // Puedes agregar relaciones u otros métodos aquí si es necesario.

    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class, 'id_supervisor');
    }
}

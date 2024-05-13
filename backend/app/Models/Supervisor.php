<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{

    protected $table = 'supervisor';
    use HasFactory;


    protected $fillable = [
        'id_gerente_comercial',
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

    public function gerenteComercial()
    {
        return $this->belongsTo(Gerente_comercial::class, 'id_gerente_comercial');
    }

    public function asesor()
    {
        return $this->hasMany(Asesor::class);
    }

    public function metaSupervisor()
    {
        return $this->hasMany(Meta_supervisor::class);
    }
}

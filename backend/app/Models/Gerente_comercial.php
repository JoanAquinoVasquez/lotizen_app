<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Gerente_comercial extends Model
{
    protected $table = 'gerente_comercial';
    use HasFactory;

    protected $fillable = [
        'duenio_id',
        'nombre',
        'apellidos',
        'usuario',
        'num_doc',
        'tipo_doc',
        'correo',
        'contrasenia',
        'telefono',
        'activo',
    ];

    // Puedes agregar relaciones u otros métodos aquí si es necesario.


    public function duenio()
    {
        return $this->belongsTo(Duenio::class);
    }


    public function proyectos()
    {
        return $this->hasMany(Proyecto::class);
    }
}

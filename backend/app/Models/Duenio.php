<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empresa;
use App\Models\Rubro;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Duenio extends Model
{
    protected $table = 'duenio';
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellidos',
        'usuario',
        'num_doc',
        'tipo_doc',
        'correo',
        'telefono',
        'contrasenia', // Incluso si no es recomendable asignarla masivamente, puedes incluirla aquí para evitar errores de validación.
    ];



    public function gerentesComerciales()
    {
        return $this->hasMany(Gerente_comercial::class);
    }
    
    public function proyectos()
    {
        return $this->hasMany(Proyecto::class);
    }

    public function empresa(): HasOne
    {
        return $this->hasOne(Empresa::class, 'id_duenio'); // Ajusta 'duenio_id' según tu estructura de base de datos
    }

    
}

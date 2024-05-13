<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Proyecto extends Model
{
    protected $table = 'proyecto';
    use HasFactory;

    protected $fillable = [
        'duenio_id',
        'gerente_comercial_id',
        'id_categoria_proyecto',
        'nombre',
        'departamento',
        'ciudad',
        'direccion',
        'fecha_inicio',
        'activo',
    ];

    // Puedes agregar relaciones u otros métodos aquí si es necesario.


    public function duenio()
    {
        return $this->belongsTo(Duenio::class);
    }

    public function categoriaProyecto()
    {
        return $this->belongsTo(Categoria_Proyecto::class, 'id_categoria_proyecto');
    }

    public function gerente_comercial()
    {
        return $this->belongsTo(Gerente_comercial::class);
    }

}

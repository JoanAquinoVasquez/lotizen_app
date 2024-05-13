<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloque extends Model
{
    protected $table = 'bloque';
    use HasFactory;


    protected $fillable = [
        'id_proyecto',
        'nombre',
        'descripcion',
        'activo',
    ];

    // Puedes agregar relaciones u otros métodos aquí si es necesario.

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto');
    }
}

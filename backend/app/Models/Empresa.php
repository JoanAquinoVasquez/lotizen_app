<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';
    use HasFactory;

    protected $fillable = [
        'id_rubro',
        'id_duenio',
        'nombre',
        'ruc',
        'logo',
    ];

    // Puedes agregar relaciones u otros métodos aquí si es necesario.

    public function rubro()
    {
        return $this->belongsTo(Rubro::class, 'id_rubro');
    }

    public function duenio()
    {
        return $this->belongsTo(Duenio::class, 'id_duenio');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoxGerente extends Model
{
    protected $table = 'proyecto_gerente_comercial';
    use HasFactory;
    

    protected $fillable = [
        'id_proyecto',
        'id_gerente',
    ];

    // Puedes agregar relaciones u otros métodos aquí si es necesario.


    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto');
    }

    public function gerente()
    {
        return $this->belongsTo(Gerente_comercial::class, 'id_gerente');
    }
    
}

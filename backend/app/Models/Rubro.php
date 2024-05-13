<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    protected $table = 'rubro';
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];
}

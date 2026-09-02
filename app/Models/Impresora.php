<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Impresora extends Model
{
    use HasFactory;

    protected $table = 'impresoras';

    protected $fillable = [
        'nombre',
        'marca',
        'modelo',
        'serie',
        'tipo_impresora',
        'fecha_ingreso',
        'ubicacion',
        'estado_impresora',
        'estado',
    ];

}
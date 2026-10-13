<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sala extends Model
{
    protected $table = 'salas';


    protected $fillable = [
        'nombre',
        'descripcion',
        'estado',
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];

    public function impresoras(): HasMany
    {
        return $this->hasMany(Impresora::class);
    }

    
     public function movimientosInsumos(): HasMany
    {
        return $this->hasMany(MovimientosInsumo::class, 'impresora_id');
    }
}


















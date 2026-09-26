<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EstadoImpresora extends Model
{
    protected $table = 'estado_impresoras';

    protected $fillable = [
        'nombre',
        'descripcion',
        'estado'
    ];

    public function impresoras(): HasMany
    {
        return $this->hasMany(Impresora::class);
    }
}

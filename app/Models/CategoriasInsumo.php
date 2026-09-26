<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoriasInsumo extends Model
{
    protected $table = 'categorias_insumos';

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

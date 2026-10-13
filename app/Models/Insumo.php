<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Insumo extends Model
{
    use HasFactory;

    protected $table = 'insumos';

    protected $fillable = [
        'codigo',
        'nombre',
        'marca',
        'modelo',
        'categorias_insumos_id',
        'unidad_medidas_id',
        'color',
        'stock_actual',
        'stock_minimo',
        'stock_maximo',
        'estado',
    ];

    public function categoriasInsumo()
    {
        return $this->belongsTo(CategoriasInsumo::class, 'categorias_insumos_id');
    }


     public function unidadMedida()
    {
        return $this->belongsTo(unidadMedida::class, 'unidad_medidas_id');
    }


    public function impresoras(): BelongsToMany
    {
        return $this->belongsToMany(
            Impresora::class,
            'impresora_insumos',
            'insumo_id',
            'impresora_id'
        )->withPivot([
            'cantidad',
            'activo',
        ]);
    }

      public function movimientosInsumos(): HasMany
    {
        return $this->hasMany(MovimientosInsumo::class, 'movimientos_insumos_id');
    }
}

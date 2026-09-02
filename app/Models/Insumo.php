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
        'tipo_insumos_id',
        'color',
        'unidad_medida',
        'stock_actual',
        'stock_minimo',
        'stock_maximo',
        'estado',
    ];

    public function tipoInsumo(): BelongsTo
    {
        return $this->belongsTo(
            TipoInsumo::class,
            'tipo_insumos_id'
        );
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
}

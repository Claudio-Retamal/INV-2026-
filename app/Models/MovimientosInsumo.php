<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MovimientosInsumo extends Model
{
    protected $table = 'movimientos_insumos';

    public const TIPOS = ['entrada', 'salida', 'consumo', 'devolucion', 'ajuste', 'baja'];

    protected $fillable = [
        'insumo_id', 'impresora_id', 'personal_id', 'sala_id', 'tipo', 'cantidad',
        'stock_anterior', 'stock_actual', 'motivo', 'fecha_movimiento',
    ];

    protected $casts = [
        'cantidad'         => 'decimal:2',
        'stock_anterior'   => 'decimal:2',
        'stock_actual'     => 'decimal:2',
        'fecha_movimiento' => 'datetime',
    ];

    public function insumo(): BelongsTo
    {
        return $this->belongsTo(Insumo::class, 'insumo_id');
    }

    public function impresora(): BelongsTo
    {
        return $this->belongsTo(Impresora::class, 'impresora_id');
    }

    public function personal(): BelongsTo
    {
        return $this->belongsTo(Personal::class, 'personal_id');
    }

    public function sala(): BelongsTo
    {
        return $this->belongsTo(Sala::class, 'sala_id');
    }
}
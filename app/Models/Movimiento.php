<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movimiento extends Model
{
    protected $table = 'movimientos_insumos';

    protected $fillable = [
        'insumo_id',
        'impresora_id',
        'personal_id',
        'sala_id',
        'tipo',
        'cantidad',
        'stock_anterior',
        'stock_actual',
        'motivo',
        'fecha_movimiento',
    ];

    protected $casts = [
        'cantidad' => 'integer',
        'stock_anterior' => 'integer',
        'stock_actual' => 'integer',
        'fecha_movimiento' => 'datetime',
    ];

    public function insumo(): BelongsTo
    {
        return $this->belongsTo(Insumo::class);
    }

    public function impresora(): BelongsTo
    {
        return $this->belongsTo(Impresora::class);
    }

    public function personal(): BelongsTo
    {
        
        return $this->belongsTo(Personal::class);
    }

    public function sala(){
        return $this->belongsTo(Sala::class);
    }

}

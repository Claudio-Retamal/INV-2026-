<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Impresora extends Model
{
    protected $table = 'impresoras';

    protected $fillable = [

        'codigo_interno',
        'nombre',
        'marca',
        'modelo',
        'serie',
        'tipo_impresora',
        'ip',
        'mac',
        'contador_inicial',
        'contador_actual',
        'fecha_ingreso',
        'sala_id',
        'estado_impresora_id',
        'estado'
    ];

    public function sala(): BelongsTo
    {
        return $this->belongsTo(Sala::class);
    }

    public function estadoImpresora(): BelongsTo
    {
        return $this->belongsTo(EstadoImpresora::class);
    }

    
     public function movimientosInsumos(): HasMany
    {
        return $this->hasMany(MovimientosInsumo::class, 'movimientos_insumos_id');
    }
}

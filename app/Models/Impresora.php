<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}

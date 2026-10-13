<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Personal extends Model
{

    protected $table = 'personals';

    use HasFactory;
    protected $fillable = ['nombres', 'apellidos', 'cargo', 'email', 'telefono', 'estado'];


       public function movimientosInsumos(): HasMany
    {
        return $this->hasMany(MovimientosInsumo::class, 'movimientos_insumos_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    //
    protected $fillable = [
        'nombre',
        'estado'

    ];
    
    public function movimientos(){
        return $this->hasMany(Movimiento::class);
    }
}

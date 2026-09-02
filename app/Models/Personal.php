<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Personal extends Model
{

    protected $table = 'personals';

    use HasFactory;
    protected $fillable = ['nombres', 'apellidos', 'cargo', 'email', 'telefono', 'estado'];


    public function Movimiento() {

        return $this->hasMany(Movimiento::class);
    }
}

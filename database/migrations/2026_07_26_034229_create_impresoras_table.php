<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('impresoras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('marca');
            $table->string('modelo');
            $table->string('serie');
            $table->string('tipo_impresora');
            $table->date('fecha_ingreso');
            $table->string('ubicacion');
            $table->string('estado_impresora');
            $table->boolean('estado')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impresoras');
    }
};

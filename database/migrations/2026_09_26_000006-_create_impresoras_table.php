<?php

use App\Models\EstadoImpresion;
use App\Models\EstadoImpresora;
use App\Models\Sala;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('impresoras', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_interno');
            $table->string('nombre');
            $table->string('marca');
            $table->string('modelo');
            $table->string('serie');
            $table->string('tipo_impresora');
            $table->string('ip');
            $table->string('mac');
            $table->bigInteger('contador_inicial')->default(0);
            $table->bigInteger('contador_actual')->default(0);
            $table->date('fecha_ingreso');


            $table->unsignedBigInteger('sala_id');

            $table->foreign('sala_id')
                ->references('id')
                ->on('salas')
                ->onDelete('cascade');


            $table->unsignedBigInteger('estado_impresora_id');

            $table->foreign('estado_impresora_id')
                ->references('id')
                ->on('estado_impresoras')
                ->onDelete('cascade');



            $table->boolean('estado')->default(true);
            $table->timestamps();
        });
    }

    /**s
     * Reverse the migrations.s
     */
    public function down(): void
    {
        Schema::dropIfExists('impresoras');
    }
};

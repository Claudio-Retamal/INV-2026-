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
        Schema::create('movimientos_insumos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('insumo_id')->constrained('insumos');
            $table->foreignId('impresora_id')->nullable()->constrained('impresoras')->nullOnDelete();
            $table->foreignId('personal_id')->nullable()->constrained('personals')->nullOnDelete();
            $table->foreignId('sala_id')->nullable()->constrained('salas')->nullOnDelete();
            $table->enum('tipo', ['entrada', 'salida', 'consumo', 'devolucion', 'ajuste', 'baja']);
            $table->decimal('cantidad', 10, 2);
            $table->decimal('stock_anterior', 10, 2);
            $table->decimal('stock_actual', 10, 2);
            $table->string('motivo', 255)->nullable();
            $table->dateTime('fecha_movimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimiento_insumos');
    }
};

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
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('insumo_id')
                ->constrained('insumos')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreignId('impresora_id')
                ->nullable()
                ->constrained('impresoras')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('personal_id')
                ->nullable()
                ->constrained('personals')
                ->cascadeOnUpdate()
                ->nullOnDelete();


            $table->foreignId('sala_id')
                ->nullable()
                ->constrained('salas')
                ->cascadeOnUpdate()
                ->nullOnDelete();


            $table->enum('tipo', [
                'entrada',
                'salida',
                'consumo',
                'devolucion',
                'ajuste',
                'baja',
            ]);

            $table->unsignedInteger('cantidad');

            $table->unsignedInteger('stock_anterior');

            $table->unsignedInteger('stock_actual');

            $table->text('motivo')->nullable();

            $table->dateTime('fecha_movimiento');

            $table->index(['insumo_id', 'tipo']);
            $table->index('impresora_id');
            $table->index('sala_id');
            $table->index('fecha_movimiento');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};

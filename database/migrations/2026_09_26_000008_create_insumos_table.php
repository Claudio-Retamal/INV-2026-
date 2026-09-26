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
        Schema::create('insumos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('nombre');
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            // $table->foreignId('categorias_insumos_id')->constrained('id')->cascadeOnUpdate()->restrictOnDelete();

            $table->foreignId('categorias_insumos_id')
                ->nullable() // Permite que un post no tenga usuario
                ->constrained()
                ->nullOnDelete(); // Si el usuario se borra, el post conserva su valor pero con user_id = null

                

            $table->foreignId('unidad_medidas_id')
                ->nullable() // 
                ->constrained()
                ->nullOnDelete(); // 

            $table->string('color')->nullable();


            $table->decimal('stock_actual', 10, 2)->default(0);
            $table->decimal('stock_minimo', 10, 2)->default(0);
            $table->decimal('stock_maximo', 10, 2)->default(0);
            $table->boolean('estado')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insumos');
    }
};

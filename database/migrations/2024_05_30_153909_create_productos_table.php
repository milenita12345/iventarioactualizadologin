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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('alias');
            $table->text('descripcion');
            $table->string('codigo');
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->foreignId('tipo_id')->constrained('tipos');
            $table->foreignId('laboratorio_id')->constrained('laboratorios');
            $table->integer('cantidad_minima');
            $table->boolean('requiere_receta')->default(false);
            $table->string('estado')->default('Activo');
            $table->boolean('eliminado')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};

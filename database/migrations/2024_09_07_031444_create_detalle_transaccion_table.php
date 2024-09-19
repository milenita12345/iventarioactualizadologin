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
        Schema::create('detalleTransacciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaccion_id')->nullable()->constrained('transacciones');
            $table->foreignId('producto_id')->nullable()->constrained('productos');
            $table->integer('cantidad');
            $table->decimal('precio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalleTransacciones');
    }
};

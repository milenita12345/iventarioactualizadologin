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
        Schema::create('transacciones', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');//Entrada o Salida | Compra o Venta
            $table->foreignId('proveedor_id')->nullable()->constrained('proveedores');
            //$table->foreignId('cliente_id')->nullable()->constrained('clientes');
            $table->dateTime('fecha');
            $table->string('nombre_comprobante');
            $table->string('numero_comprobante');
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
        Schema::dropIfExists('transacciones');
    }
};

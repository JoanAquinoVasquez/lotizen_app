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
        Schema::create('venta', function (Blueprint $table) {
            $table->id("num_venta");

            $table->unsignedBigInteger('id_inmueble');
            $table->unsignedBigInteger('id_asesor');
            $table->unsignedBigInteger('id_cliente');

            $table->date("fecha");
            $table->boolean("credito");
            $table->integer("estado");

            // Definir claves foráneas
            $table->foreign('id_inmueble')->references('id')->on('inmueble');
            $table->foreign('id_asesor')->references('id')->on('asesor');
            $table->foreign('id_cliente')->references('id')->on('cliente');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta');
    }
};

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
        Schema::create('pregunta', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("id_formato_encuesta");
            
            $table->integer("peso");
            $table->text("enunciado");
            $table->integer("tipo_pregunta");
            // 1: Abierta, 2: Cerrada con una sola respuesta correcta, 3: Cerrada

            $table->foreign("id_formato_encuesta")->references("id")->on("formato_encuesta");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pregunta');
    }
};

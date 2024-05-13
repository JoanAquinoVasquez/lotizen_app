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
        Schema::create('inmueble', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_bloque');
            $table->unsignedBigInteger('id_categoria_inmueble');

            $table->decimal("precio",19,2);
            $table->string("locacion");
            $table->integer("numero");
            $table->boolean("agua");
            $table->boolean("servicio_luz");
            $table->integer("estado");

             // Definir claves foráneas
            $table->foreign('id_bloque')->references('id')->on('bloque');
            $table->foreign('id_categoria_inmueble')->references('id')->on('categoria_inmueble');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inmueble');
    }
};

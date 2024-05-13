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
        Schema::create('encuesta', function (Blueprint $table) {
            $table->unsignedBigInteger("id_cliente");
            $table->unsignedBigInteger("id_evaluacion");
            $table->unsignedBigInteger("id_formato_encuesta");

            $table->date("fecha");

            $table->foreign("id_cliente")->references("id")->on("cliente");
            $table->foreign("id_evaluacion")->references("id")->on("evaluacion");
            $table->foreign("id_formato_encuesta")->references("id")->on("formato_encuesta");

            //llave primaria compuesta
            $table->primary(["id_cliente","id_evaluacion","id_formato_encuesta"]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encuesta');
    }
};

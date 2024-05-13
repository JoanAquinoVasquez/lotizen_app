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
        Schema::create('visita', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("id_asignacion_cliente");

            $table->date("fecha");
            $table->time("hora", 0);
            $table->integer("horas_duracion")->nullable();
            $table->boolean("mov_particular");
            $table->text("observacion")->nullable();

            $table->foreign("id_asignacion_cliente")->references("id")->on("asignacion_cliente");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visita');
    }
};

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
        Schema::create('meta_proyecto', function (Blueprint $table) {
            $table->id();


            $table->unsignedBigInteger('id_gerente_comercial');

            $table->date("fecha_inicio");
            $table->date("fecha_fin");
            $table->integer("num_lotes");
            $table->integer("porcentaje_alcanzado")->nullable();
            $table->boolean("activo");

             // Definir claves foráneas
            $table->foreign('id_gerente_comercial')->references('id')->on('gerente_comercial');
        

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meta_proyecto');
    }
};

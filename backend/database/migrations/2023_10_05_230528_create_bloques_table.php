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
        Schema::create('bloque', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_proyecto');

            $table->string("nombre");
            $table->text("descripcion")->nullable();
            $table->boolean("activo");

            // Definir claves foráneas
            $table->foreign('id_proyecto')->references('id')->on('proyecto');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bloque');
    }
};

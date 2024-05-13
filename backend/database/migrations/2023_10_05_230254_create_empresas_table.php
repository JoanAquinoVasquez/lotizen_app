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
        Schema::create('empresa', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_rubro');
            $table->unsignedBigInteger('id_duenio');

            $table->string("nombre");
            $table->string("ruc", 11)->unique();
            $table->binary("logo")->nullable();

            $table->timestamps();

            // Definir claves foráneas
            $table->foreign('id_rubro')->references('id')->on('rubro');
            $table->foreign('id_duenio')->references('id')->on('duenio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresa');
    }
};

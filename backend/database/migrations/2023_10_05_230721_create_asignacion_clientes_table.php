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
        Schema::create('asignacion_cliente', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("id_asesor");
            $table->unsignedBigInteger("id_cliente");
            $table->unsignedBigInteger("id_num_venta")->nullable();

            $table->date("fecha_asignacion");
            $table->boolean("vigente");

            $table->foreign("id_asesor")->references("id")->on("asesor");
            $table->foreign("id_cliente")->references("id")->on("cliente");
            $table->foreign("id_num_venta")->references("num_venta")->on("venta");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignacion_cliente');
    }
};

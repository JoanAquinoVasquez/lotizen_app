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
        Schema::create('proyecto', function (Blueprint $table) {
            $table->id();

            $table->string("nombre");
            $table->string("departamento");
            $table->string("ciudad");
            $table->string("direccion");
            $table->date("fecha_inicio");
            $table->boolean("activo");

             // Definir claves foráneas
            $table->foreignId('duenio_id')->constrained('duenio')->onDelete('cascade');
            $table->foreignId('gerente_comercial_id')->constrained('gerente_comercial')->onDelete('cascade');
            $table->foreignId('id_categoria_proyecto')->constrained('categoria_proyecto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyecto');
    }
};

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
        Schema::create('supervisor', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_gerente_comercial');

            $table->string("nombre", 30);
            $table->string("apellidos", 100);
            $table->string("usuario")->unique();
            $table->string("num_doc", 20)->unique();
            $table->integer("tipo_doc");
            $table->string("correo");
            $table->string("contrasenia");
            $table->string("telefono");
            $table->boolean("activo");
            $table->boolean("externo");

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
        Schema::dropIfExists('supervisor');
    }
};

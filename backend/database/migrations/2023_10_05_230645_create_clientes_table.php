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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();

            $table->string("nombre", 30);
            $table->string("apellidos", 100);
            $table->string("telefono");
            $table->string("correo")->nullable();
            $table->string("genero");
            $table->integer("tipo_doc")->nullable();
            $table->string("num_doc", 20)->nullable();  
            $table->date("fecha_nac")->nullable(); 
            $table->string("direccion", 100)->nullable();    
            $table->string("pais", 20)->nullable();    
            $table->decimal("ingresos",19,2)->nullable();    
            $table->boolean("soltero")->nullable();
            $table->boolean("carga_familiar")->nullable();
            $table->integer("nivel_estudio")->nullable();
            $table->date("fecha_contacto")->nullable(); 
            $table->boolean("disponible");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};

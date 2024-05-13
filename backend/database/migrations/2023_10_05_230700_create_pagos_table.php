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
        Schema::create('pago', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("id_num_venta");
            $table->decimal("monto",19,2);
            $table->string("num_comprobante");
            $table->binary("comprobante")->nullable();
            $table->integer("tipo");
            $table->date("fecha_pactada");
            $table->date("fecha_comprobante")->nullable();
            
            $table->foreign("id_num_venta")->references("num_venta")->on("venta");
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pago');
    }
};

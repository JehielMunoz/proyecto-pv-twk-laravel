<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestockFlujoentradaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restock_flujoentrada', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idRestock')->constrained('restocks');
            $table->foreignId('idEntrada')->constrained('flujo_entrada');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restock_flujoentrada');
    }
}

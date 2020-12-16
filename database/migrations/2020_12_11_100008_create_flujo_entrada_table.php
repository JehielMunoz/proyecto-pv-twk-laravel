<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlujoEntradaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flujo_entrada', function (Blueprint $table) {
            $table->id();
            $table->foreignId('codigoProducto')->references('codigo')->on('productos');
            $table->integer('cantidad');
            $table->integer('numeroLote');
            $table->date('fechaVencimiento')->nullable();
            $table->foreignId('ubicacion')->constrained('ubicaciones');
            $table->foreignId('idResponsable')->constrained('usuarios');
            $table->dateTime('fechaOperacion');
            $table->boolean('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flujo_entrada');
    }
}

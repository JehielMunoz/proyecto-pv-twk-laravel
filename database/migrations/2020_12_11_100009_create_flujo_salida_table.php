<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlujoSalidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flujo_salida', function (Blueprint $table) {
            $table->id();
            $table->foreignId('codigoProducto')->references('codigo')->on('productos');
            $table->integer('cantidad');
            $table->foreignId('idTipoEgreso')->constrained('parametros');
            $table->foreignId('idResponsable')->constrained('usuarios');
            $table->dateTime('fechaOperacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flujo_salida');
    }
}

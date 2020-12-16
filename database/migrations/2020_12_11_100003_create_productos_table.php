<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('codigo')->autoIncrement(102301);
            $table->string('nombre',100);
            //$table->bigIncrements('idCategoria');
            //$table->foreign('idCategoria')->references('id')->on('parametros');
            $table->foreignId('idCategoria')->constrained('parametros');
            $table->foreignId('idMedida')->constrained('parametros');
            $table->foreignId('idMarca')->constrained('parametros');
            $table->foreignId('idresponsableCreacion')->constrained('usuarios');

            $table->string('descripcion',255);
            $table->dateTime('fechaCreacion');
            $table->dateTime('fechaModificacion');
            $table->unique(array('codigo', 'nombre'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}

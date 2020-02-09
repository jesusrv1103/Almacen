<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('cantidad');
            $table->integer('idAlmacen')->unsigned();
            $table->foreign('idAlmacen')->references('id')->on('almacenes');
            $table->integer('idUnidad')->unsigned();
            $table->foreign('idUnidad')->references('id')->on('unidad_de_medidas');
            $table->string('fechaCaducidad')->nullable($value = true);
            $table->string('tipoArticulo');
            $table->integer('idPartida')->unsigned();
            $table->foreign('idPartida')->references('id')->on('partidas');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articulos');
    }
}

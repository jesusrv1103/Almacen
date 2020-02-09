<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_solicitud', function (Blueprint $table) {
            $table->increments('id',500);
            $table->integer('idSolicitud')->unsigned();
            $table->foreign('idSolicitud')->references('id')->on('solicitudes_enviadas');
            $table->integer('idArticulo')->unsigned();
            $table->foreign('idArticulo')->references('id')->on('articulos');
            $table->integer('cantidad');
            $table->integer('cantidadAsignada');
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
        Schema::drop('detalle_solicitud');
    }
}

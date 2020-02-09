<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidas2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidas2', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPartida')->unsigned();
            $table->foreign('idPartida')->references('id')->on('partidas');
            $table->integer('idMes')->unsigned();
            $table->foreign('idMes')->references('id')->on('meses');
            $table->double('presupuestoAsignado');
            $table->double('presupuestoGastado');
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
        Schema::drop('partidas2');
    }
}

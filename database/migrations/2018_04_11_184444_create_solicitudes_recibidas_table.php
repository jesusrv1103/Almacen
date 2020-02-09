<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesRecibidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes_recibidas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numeroSolicitud');
            $table->string('fechaS');
            $table->bigInteger('idUsuario')->unsigned();
            $table->foreign('idUsuario')->references('id')->on('users');
            $table->integer('idDireccion')->unsigned();
            $table->foreign('idDireccion')->references('id')->on('direcciones');
            $table->string('UsoDestinado');
            $table->string('estado');
            $table->timestamps();




        });
        DB::statement("ALTER TABLE solicitudes_recibidas AUTO_INCREMENT = 14000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('solicitudes');
    }
}

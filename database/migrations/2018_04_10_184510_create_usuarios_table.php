<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreCompleto');
            $table->string('apellido');
            $table->string('nombreusuario');
            $table->string('contraseña');
            $table->string('tipoUsuario');
            $table->integer('idDireccion')->unsigned();
            $table->foreign('idDireccion')->references('id')->on('direcciones');
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
        Schema::drop('usuarios');
    }
}

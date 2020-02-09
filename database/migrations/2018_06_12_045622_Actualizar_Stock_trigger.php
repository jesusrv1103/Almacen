<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActualizarStockTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       //
        DB::unprepared('

            CREATE TRIGGER tr_updStrockCompras AFTER INSERT ON entradas
            FOR EACH ROW BEGIN
            UPDATE articulos SET cantidad=cantidad+new.cantidad
            WHERE articulos.id=new.idArticulos;
            END

            ');


      

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

<?php

use Illuminate\Database\Seeder;

class UnidadMedidaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unidad_de_medidas')->insert([
            'nombre' => 'PIEZA', 
            ]);

    	DB::table('unidad_de_medidas')->insert([
    		'nombre' => 'CAJA', 
    		]);

    	DB::table('unidad_de_medidas')->insert([
    		'nombre' => 'PAQUETE', 
    		]);

        DB::table('unidad_de_medidas')->insert([
            'nombre' => 'KILOGRAMO', 
            ]);
    }
}

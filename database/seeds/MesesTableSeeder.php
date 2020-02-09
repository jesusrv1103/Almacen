<?php

use Illuminate\Database\Seeder;

class MesesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('meses')->insert([
    		'nombre_mes' => 'ENERO', 
    		]);

    	DB::table('meses')->insert([
    		'nombre_mes' => 'FEBRERO', 
    		]);

    	DB::table('meses')->insert([
    		'nombre_mes' => 'MARZO', 
    		]);

    	DB::table('meses')->insert([
    		'nombre_mes' => 'ABRIL', 
    		]);

    	DB::table('meses')->insert([
    		'nombre_mes' => 'MAYO', 
    		]);


    	DB::table('meses')->insert([
    		'nombre_mes' => 'JUNIO', 
    		]);

    	DB::table('meses')->insert([
    		'nombre_mes' => 'JULIO', 
    		]);


    	DB::table('meses')->insert([
    		'nombre_mes' => 'AGOSTO', 
    		]);


    	DB::table('meses')->insert([
    		'nombre_mes' => 'SEPTIEMBRE', 
    		]);


    	DB::table('meses')->insert([
    		'nombre_mes' => 'OCTUBRE', 
    		]);

    	DB::table('meses')->insert([
    		'nombre_mes' => 'NOVIEMBRE', 
    		]);

    	DB::table('meses')->insert([
    		'nombre_mes' => 'DICIEMBRE', 
    		]);
    }
}

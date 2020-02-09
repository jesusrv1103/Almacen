<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        $this->call(MesesTableSeeder::class);
        $this->call(UnidadMedidaTableSeeder::class);
       
        $this->call(AlmacenTableSeeder::class);
    }
}

<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

use Almacen\Role_User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     DB::table('direcciones')->insert([
        'nombre' => 'TI',
        'estado' => 'Activo',
        ]);

     DB::table('users')->insert([
        'name' => 'SEZAC', 
        'nombreusuario' => 'SEZAC', 
        'email' => 'sezac@sezac.gob', 
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',//secret 
        'idDireccion' => '1', 
        ]);


     Role::create([
      'name' => 'Admin',
      'slug' => 'admin',
      'special' => 'all-access'
      ]);


     
     Role_User::create([
         'role_id' => '1', 
         'user_id' => '1', 
         ]);

 }
}

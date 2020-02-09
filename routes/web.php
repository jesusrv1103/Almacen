<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
	return view('auth/login');
});

//Route::resource('home','HomeController');
Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function(){


	Route::post('roles/store','RoleController@store')->name('roles.store')
	->middleware('permission:roles.create');

	Route::get('roles','RoleController@index')->name('roles.index')
	->middleware('permission:roles.index');

	Route::get('roles/create','RoleController@create')->name('roles.create')
	->middleware('permission:roles.create');


	Route::put('roles/{role}','RoleController@update')->name('roles.update')
	->middleware('permission:roles.edit');


	Route::delete('roles/{role}','RoleController@destroy')->name('roles.destroy')
	->middleware('permission:roles.destroy');


	Route::get('roles/{role}/edit','RoleController@edit')->name('roles.edit')
	->middleware('permission:roles.edit');

//almacenes


	Route::post('almacenes/store','AlmacenController@store')->name('almacenes.store');

	Route::get('almacenes','AlmacenController@index')->name('almacenes.index');

	Route::get('almacenes/create','AlmacenController@create')->name('almacenes.create');


	Route::put('almacenes/{almacen}','AlmacenController@update')->name('almacenes.update');


	Route::delete('almacenes/{almacen}','AlmacenController@destroy')->name('almacenes.destroy');


	Route::get('almacenes/{Almacen}/edit','AlmacenController@edit')->name('almacenes.edit');



	//usuarios
	Route::post('users/store','UserController@store')->name('users.store')
	->middleware('permission:users.create');

	Route::get('users','UserController@index')->name('users.index')
	->middleware('permission:users.index');

	Route::get('users/create','UserController@create')->name('users.create')
	->middleware('permission:users.create');


	Route::put('users/{users}','UserController@update')->name('users.update')
	->middleware('permission:users.edit');


	Route::delete('users/{users}','UserController@destroy')->name('users.destroy')
	->middleware('permission:users.destroy');


	Route::get('users/{users}/edit','UserController@edit')->name('users.edit')
	->middleware('permission:users.edit'); 
	
});

//controladores manejados en constructor
Route::resource('partidas','PartidaController');


Route::resource('users','UserController');

Route::get('verPartidas/{id}','PartidaController@verPartidas')->name('partidas.verPartidas');

Route::resource('direcciones','DireccionController');

Route::resource('proveedores','ProveedorController');

Route::resource('articulos','ArticulosController');
Route::get('pdf','ArticulosController@pdf')->name('articulos.pdf');

Route::resource('partidas2','Partida2Controller');
Route::get('crearPartidas2/{id}','Partida2Controller@create1')->name('partidas2.create1');
Route::get('descargarConceptoPartidas/{id}','Partida2Controller@descargarConceptoPartidas')->name('conceptoPartidas.pdf');
//Route::resource('reportes','ReporteController');
Route::resource('events','EventController');
Route::get('event2', 'EventController@index1')->name('event2.index1');

Route::resource('solicitudesEnviadas','SolicitudEnviadasController');
Route::get('pdf/{id}','SolicitudRecibidasController@pdf')->name('solicitud.pdf');
Route::get('verSolicitudes/{id}','SolicitudEnviadasController@verSolicitudes')->name('solicitud.verSolicitudes');

Route::get('tipoUnidad/{id}', 'SolicitudEnviadasController@tipoUnidad')->name('solicitud.tipo');

Route::resource('solicitudRecibidas','SolicitudRecibidasController');

Route::resource('entradas','EntradasController');

Route::resource('inventarios','InventarioController');
Route::get('pdf','InventarioController@pdf')->name('inventario.pdf');

Route::get('adquisinet', function()
{
	return redirect()->away('http://adquisinet.sazacatecas.gob.mx/index.php
		');
});


Route::post('asignarCantidad/{id}', 'SolicitudRecibidasController@asignarCantidad');




Auth::routes();

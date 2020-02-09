<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Almacen;
use DB;
use Maatwebsite\Excel\Facades\Excel;


class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almacenes= DB::table('almacenes')->where('estado','Activo')->get();
        return view('almacen.index',['almacenes' => $almacenes]);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('almacen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $almacenes= new Almacen();
        $almacenes->nombre=$request->get('nombre');
        $almacenes->estado='Activo';
        $almacenes->save();
        return Redirect::to('almacenes')->with('info','Almacén guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         return view("almacen.edit",["almacenes"=>Almacen::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $almacenes=Almacen::findOrFail($id);
        $almacenes->nombre=$request->get('nombre');
        
        $almacenes->update();
        return Redirect::to('almacenes')->with('info','Almacén editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $almacenes=Almacen::findOrFail($id);
        $almacenes->estado="Inactivo";
        $almacenes->update();
        return Redirect::to('almacenes')->with('info','Almacén eliminado con éxito');
    }
}







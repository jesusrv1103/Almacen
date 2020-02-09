<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Inventarios;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
class InventarioController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventarios= DB::table('articulos')
        ->join('almacenes as a', 'articulos.idAlmacen', '=', 'a.id')
        ->join('partidas','articulos.idPartida','=','partidas.id')
        ->select('articulos.id','articulos.nombre','articulos.cantidad','partidas.numeroPartida','partidas.concepto','a.nombre as nomA')
        ->where('articulos.estado','Activo')->get();
        return view('inventario.index',['inventarios' => $inventarios]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function pdf()
    {

     $inventarios= DB::table('articulos')
     ->join('almacenes as a', 'articulos.idAlmacen', '=', 'a.id')
     ->join('partidas','articulos.idPartida','=','partidas.id')
     ->select('articulos.id','articulos.nombre','articulos.cantidad','partidas.numeroPartida','partidas.concepto','a.nombre as nomA')
     ->where('articulos.estado','Activo')->get();
     $pdf=PDF::loadView("inventario.invoice",['inventarios'=>$inventarios]);
     return $pdf->download("inventario.pdf");
 }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventarios= new inventarios();
        $inventarios->numeroPartida=$request->get('numeroPartida');
        $inventarios->concepto=$request->get('concepto');
        $inventarios->nombre=$request->get('nombre');
        $inventarios->cantidad=$request->get('cantidad');
        $inventarios->save();
        return Redirect::to('inventarios');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

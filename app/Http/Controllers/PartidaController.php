<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Partida;
use App\Partida2;
use DB;
use PDF;
use Maatwebsite\Excel\Facades\Excel;


class PartidaController extends Controller
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
        $partidas= DB::table('partidas')->where('estado','Activo')->get();
        return view('partida.index',['partidas' => $partidas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partida.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partidas= new Partida();
        $partidas->numeroPartida=$request->get('numeroPartida');
        $partidas->concepto=$request->get('concepto');
        $partidas->ano=$request->get('ano');
        $partidas->estado='Activo';
        $partidas->save();
        return Redirect::to('partidas')->with('info','Partida guardada con éxito');
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
        return view("partida.edit",["partidas"=>Partida::findOrFail($id)]);
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
        $partidas=Partida::findOrFail($id);
        $partidas->numeroPartida=$request->get('numeroPartida');
        $partidas->concepto=$request->get('concepto');
        $partidas->ano=$request->get('ano');
        $partidas->update();
        return Redirect::to('partidas')->with('info','Partida editada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partidas=Partida::findOrFail($id);
        $partidas->estado="Inactivo";
        $partidas->update();
        return Redirect::to('partidas')->with('info','Partida eliminada con éxito');
    }


    public function verPartidas($id)
    {

        $partidas=Partida::findOrFail($id);
        $idPartida=$partidas->id;

        $partidasMensuales=DB::table('partidas2')
        ->join('partidas','partidas2.idPartida','=','partidas.id')
        ->join('meses','partidas2.idMes','=','meses.id')
        ->select('partidas2.*','meses.nombre_mes')
        ->where('partidas.estado','=','Activo')
        ->where('partidas2.estado','=','Activo')
        ->where('idPartida','=',$idPartida)
        ->get();
        return view('partida.listaPartidas',["partidas"=>$partidas,"partidasMensuales"=>$partidasMensuales]);        
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Partidas2;
use App\Partida;
use DB;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class Partida2Controller extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
        
    }

    public function index()
    {
     $partida2= DB::table('partidas2')->where('estado','Activo')->get();
     return view('partidas.index',['partidas2' => $partida2]);
    }


 public function create1($id)
 {
     $partidas=Partida::findOrFail($id);
     $meses= DB::table('meses')->get(); 
     return view('partidas2.create',['meses' => $meses,'partidas'=>$partidas]);
 }

 public function store(Request $request) {

    DB::beginTransaction();


    $partidas= new Partidas2();
    $partidas->idPartida=$request->get('idPartida');
    $partidas->idMes=$request->get('idMes');
    $partidas->presupuestoAsignado=$request->get('presupuestoA');
    $partidas->presupuestoGastado=$request->get('presupuestoG');
    $partidas->estado="Activo";
    $partidas->save();
 
    $idPartida=$partidas->idPartida;

    $partidas=Partida::findOrFail($idPartida);
    $partidasMensuales=DB::table('partidas2')
    ->join('partidas','partidas2.idPartida','=','partidas.id')
    ->join('meses','partidas2.idMes','=','meses.id')
    ->select('partidas2.*','meses.nombre_mes')
    ->where('partidas.estado','=','Activo')
    ->where('partidas2.estado','=','Activo')
    ->where('idPartida','=',$idPartida)
    ->get();

    DB::commit();
    return view('partida.listaPartidas',["partidas"=>$partidas,"partidasMensuales"=>$partidasMensuales]);    
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


        $partidas=Partidas2::findOrFail($id);
        $meses= DB::table('meses')->get(); 
        return view("partidas2.edit",['meses' => $meses,'partidas'=>$partidas]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){


        DB::beginTransaction();

        $partidas=Partidas2::findOrFail($id);
        $partidas->idPartida=$request->get('idPartida');
        $partidas->idMes=$request->get('idMes');
        $partidas->presupuestoAsignado=$request->get('presupuestoA');
        $partidas->presupuestoGastado=$request->get('presupuestoG');
        $partidas->update();
        $idPartida=$partidas->idPartida;
        $partidas=Partida::findOrFail($idPartida);
        $partidasMensuales=DB::table('partidas2')
        ->join('partidas','partidas2.idPartida','=','partidas.id')
        ->join('meses','partidas2.idMes','=','meses.id')
        ->select('partidas2.*','meses.nombre_mes')
        ->where('partidas.estado','=','Activo')
        ->where('partidas2.estado','=','Activo')
        ->where('idPartida','=',$idPartida)
        ->get();

        DB::commit();
        return view('partida.listaPartidas',["partidas"=>$partidas,"partidasMensuales"=>$partidasMensuales]); 
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        DB::beginTransaction();

        $partidas=Partidas2::findOrFail($id);
        $idPartida=$partidas->idPartida;
        $partidas->estado="Inactivo";
        $partidas->update();
        $partidas=Partida::findOrFail($idPartida);
        $partidasMensuales=DB::table('partidas2')
        ->join('partidas','partidas2.idPartida','=','partidas.id')
        ->join('meses','partidas2.idMes','=','meses.id')
        ->select('partidas2.*','meses.nombre_mes')
        ->where('partidas.estado','=','Activo')
        ->where('partidas2.estado','=','Activo')
        ->where('idPartida','=',$idPartida)
        ->get();

        DB::commit();
        return view('partida.listaPartidas',["partidas"=>$partidas,"partidasMensuales"=>$partidasMensuales]); 
    }



    public  function  descargarConceptoPartidas($idPartida){



        $conceptoPartidas=Partida::findOrFail($idPartida);

        $partidas2 = DB::table('partidas')
        ->join('partidas2 as p', 'p.idPartida', '=','partidas.id')
        ->select('p.*')
        ->join('meses','p.idMes','=','meses.id')
        ->select('partidas.*', 'p.*', 'meses.*')
        ->where('p.idPartida','=', $idPartida)
        ->get();

        $pdf=PDF::loadView("partidas2.invoice",['partidas2'=>$partidas2,'conceptoPartidas'=>$conceptoPartidas]);
        return $pdf->download("conceptoPartidas.pdf");






    }
}

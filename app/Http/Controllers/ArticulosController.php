<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Articulos;
use App\UnidadMedida;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class ArticulosController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
      
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $articulos= DB::table('articulos')
     ->join('almacenes as a', 'articulos.idAlmacen', '=', 'a.id')
     ->join('unidad_de_medidas as u', 'articulos.idUnidad', '=', 'u.id')
     ->join('partidas','articulos.idPartida','=','partidas.id')
     ->select('articulos.*','partidas.numeroPartida','u.nombre as UnidadMedidad','partidas.concepto','a.nombre as nomA')
     ->where('articulos.estado','Activo')->get();
     return view('articulo.index', ['articulos' => $articulos]);
 }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $almacenes=DB::table('almacenes')
        ->where('estado','=','Activo')
        ->get();

        $unidades=DB::table('unidad_de_medidas')
        ->get();
        $partidas= DB::table('partidas')
        ->where('estado','=','Activo')->get();
        return view('articulo.create',['almacenes'=>$almacenes,'partidas'=>$partidas,'unidades'=>$unidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulos= new Articulos();
        $articulos->nombre=$request->get('nombre');
        $articulos->cantidad=$request->get('cantidad');
        $articulos->idAlmacen=$request->get('idAlmacen');
        $articulos->idUnidad=$request->get('UnidadMedidad');
        $articulos->fechaCaducidad=$request->get('fechaCaducidad');
        $articulos->tipoArticulo=$request->get('tipoArticulo');
        $articulos->idPartida=$request->get('idPartida');
        $articulos->estado='Activo';
        $articulos->save();
        return Redirect::to('articulos')->with('info','Artículo guardado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $articulos=Articulos::findOrFail($id);
        $almacenes=DB::table('almacenes')
        ->where('estado','=','Activo')
        ->get();
        $partidas= DB::table('partidas')
        ->where('estado','=','Activo')->get();
        $unidades=DB::table('unidad_de_medidas')
        ->get();
        return view('articulo.edit',['articulos'=>$articulos,'almacenes'=>$almacenes,'partidas'=>$partidas,'unidades'=>$unidades]);
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
        $articulos=Articulos::findOrFail($id);
        $articulos->nombre=$request->get('nombre');
        $articulos->cantidad=$request->get('cantidad');
        $articulos->idAlmacen=$request->get('idAlmacen');
        $articulos->idUnidad=$request->get('UnidadMedidad');
        $articulos->fechaCaducidad=$request->get('fechaCaducidad');
        $articulos->tipoArticulo=$request->get('tipoArticulo');
        $articulos->idPartida=$request->get('idPartida');

        $articulos->update();
        return Redirect::to('articulos')->with('info','Artículo editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulos=Articulos::findOrFail($id);
        $articulos->estado="Inactivo";
        $articulos->update();
        return Redirect::to('articulos')->with('info','Artículo eliminado con éxito');
    }



    public function pdf()
    {

        $pdf=PDF::loadView("articulo.invoice");
        return $pdf->download("archivo.pdf");
    }
}

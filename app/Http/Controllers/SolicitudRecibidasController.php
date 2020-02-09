<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\SolicitudRecibidas;
use App\SolicitudesEnviadas;
use App\DetalleSolicitud;
use App\Articulos;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

use Illuminate\Http\Resources\Json\Resource;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class SolicitudRecibidasController extends Controller
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
      $solicitudesRecibidas= DB::table('solicitudes_enviadas')
      ->join('users as u', 'solicitudes_enviadas.idUsuario', '=', 'u.id')
      ->join('direcciones as d', 'solicitudes_enviadas.idDireccion', '=', 'd.id')
      ->select('solicitudes_enviadas.*','u.name','solicitudes_enviadas.*','d.nombre')
      ->where('solicitudes_enviadas.estado','Activo')->get();
      return view('solicitudRecibidas.index',['solicitudesRecibidas' => $solicitudesRecibidas]);

      
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      

      $usuarios= DB::table('users')->where('estado','Activo')->get();
      $direcciones= DB::table('direcciones')->where('estado','Activo')->get();

      

      $productos= DB::table('articulos')->where('estado','Activo')->get();
      return view('solicitudRecibidas.create',['usuarios'=>$usuarios,'direcciones'=>$direcciones,'productos'=>$productos]);


      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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

    }




    public function verSolicitudes($id)

    {

      $solicitudes=SolicitudesEnviadas::findOrFail($id);
      $idSolicitud=$solicitudes->id;

      $verSolicitud=DB::table('detalle_solicitud')
      ->join('articulos','detalle_solicitud.idArticulo','=','articulos.id')
      ->select('detalle_solicitud.*','articulos.nombre','articulos.idUnidad')
      ->join('unidad_de_medidas','unidad_de_medidas.id','=','articulos.id')
      ->select('detalle_solicitud.id as idDetalleSolicitud','detalle_solicitud.idSolicitud','detalle_solicitud.idArticulo',
        'detalle_solicitud.cantidad as cantidadDetalleSolicitud',
        'detalle_solicitud.cantidadAsignada','articulos.id as idMaterial',
        'articulos.nombre','unidad_de_medidas.nombre as unidad')
      ->where('articulos.estado','=','Activo')
      ->where('idSolicitud','=',$idSolicitud)
      ->get();
      return view('solicitud.verSolicitudes',["solicitudes"=>$solicitudes,"verSolicitud"=>$verSolicitud]);   
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
    public function pdf($id)
    {

     $solicitudes=SolicitudesEnviadas::findOrFail($id);
     $idSolicitud=$solicitudes->id;

     $verSolicitud=DB::table('detalle_solicitud')
     ->join('articulos','detalle_solicitud.idArticulo','=','articulos.id')
     ->select('detalle_solicitud.*','articulos.nombre','articulos.idUnidad')
     ->join('unidad_de_medidas','unidad_de_medidas.id','=','articulos.id')
     ->select('detalle_solicitud.*','articulos.nombre','unidad_de_medidas.nombre as unidad')
     ->where('articulos.estado','=','Activo')
     ->where('idSolicitud','=',$idSolicitud)
     ->get();
     $pdf=PDF::loadView("solicitudRecibidas.invoice",['solicitudes'=>$solicitudes, "verSolicitud"=>$verSolicitud]);
     return $pdf->download("archivo.pdf");
   }









 }

@extends('layouts.principal')
@section('contenido')
<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Partidas</h1>
    <h2 class="">Lista de Partidas mensuales</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li ><a style="color: #808080" href="{{url('/empleados')}}">Inicio</a></li>
      <li class="active">Lista de Partidas mensuales</a></li>
    </ol>
  </div>
</div>
<div class="container clear_both padding_fix">
  <div class="row">
    <div class="col-md-12">
      <div class="block-web">
        <div class="header">
          <div class="row" style="margin-top: 15px; margin-bottom: 12px;">
            <div class="col-sm-7">
              <div class="actions"> </div>
              <h4 class="content-header " style="margin-top: -5px;">&nbsp;&nbsp;<strong>{{$partidas->concepto}}</strong></h4>
            </div>
            <div class="btn-group pull-right">
              <b>

                <div class="btn-group" style="margin-right: 10px;">
               
                  <a class="btn btn-sm btn-success tooltips" href="{{URL::action('Partida2Controller@create1',$partidas->id)}}" style="margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Registrar Nueva Partida Mensual"> <i class="fa fa-plus"></i> Registrar   </a>
                

               
                  <a class="btn btn-sm btn-warning tooltips" href="{{URL::action('Partida2Controller@descargarConceptoPartidas',$partidas->id)}}" style="margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Descargar Partidas"> <i class="fa fa-download"></i> Descargar </a>
               

                  <a class="btn btn-sm btn-danger tooltips" href="{{url('/partidas')}}" style="margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cancelar"> <i class="fa fa-times"></i> Salir</a>
                </div>
              </a>
            </b>
          </div> 

        </div>
      </div> 
      @if(session('info'))
      <div class="alert alert-success">
        <strong>{{ session('info')}}</strong> 
      </div>
      @endif

      <div class="porlets-content container clear_both padding_fix">
       @foreach($partidasMensuales as $partidames )
       <div class="col-lg-6"> 
        <section class="panel default blue_title h4">
          <div class="panel-heading"><span class="semi-bold">{{$partidames->nombre_mes}}</span> 
          </div>
          <div class="panel-body">

            <table class="table table-striped">

              <tbody>
                <tr>
                  <th>Presupuesto Asignado: </th>
                  <td>{{$partidames->presupuestoAsignado}}</td>
                </tr>
                <tr>
                  <th>Presuspuesto Gastado: </th>
                  <td>{{$partidames->presupuestoGastado}}</td>
                </tr>
                <tr>
                  <th>Diferencia: </th>
                  <td>{{$partidames->presupuestoAsignado-$partidames->presupuestoGastado}}</td>

                </tr>
                
              
                <tr>
                  <th>Modificar: </th>
                  <td><a class="btn btn-primary btn-sm" href="{{route('partidas2.edit',$partidames->id)}}" style="margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Modificar Partida Mensual"> <i class="fa fa-edit"></i> Modificar </a></td>
                </tr>
            
                <tr>
                  <th>Eliminar: </th>
                  <td><a class="btn btn-danger btn-sm" href="#modal-delete-{{$partidames->id}}" style="margin-right: 10px;" data-toggle="modal" data-placement="bottom" title="" data-original-title="Eliminar Partida Mensual"> <i class="fa fa-eraser"></i> Eliminar </a></td>
                </tr>
            

              </tbody>
            </table>
          </div>
        </section>
      </div>

      @include('partidas2.modal')
      @endforeach

    </div><!--/porlets-content-->
  </div><!--/block-web-->
</div><!--/col-md-12-->
</div><!--/row-->
</div>
@endsection

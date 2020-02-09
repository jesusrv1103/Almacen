@extends('layouts.principal')
@section('contenido')
<!--\\\\\\\ contentpanel start\\\\\\-->
<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Artículos</h1>
    <h2 class="">Entrada de Artículos</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a style="color: #808080"  href="?c=Inicio">Inicio</a></li>
      <li style="color: #808080"  class="active">Entrada de Artículos</a></li>
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
              <h2 class="content-header theme_color" style="margin-top: -5px;">&nbsp;&nbsp;Entrada de Artículos</h2>
            </div>
            <div class="col-md-5">
              <div class="btn-group pull-right">
                <b>

                
                  <div class="btn-group" style="margin-right: 10px;">
                    <a class="btn btn-sm btn-success tooltips" href="{{URL::action('EntradasController@create')}}" style="margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Registrar Nueva Entrada de Artículo"> <i class="fa fa-plus"></i> Registrar </a>
                  </div>
               

                </b>
              </div>
            </div>
          </div>
        </div>
        @if(session('info'))
        <div class="alert alert-success">
          <strong>{{ session('info')}}</strong> 
        </div>
        @endif

        <div class="porlets-content">
          <div class="table-responsive">
            <table  class="display table table-bordered table-striped" id="dynamic-table">
              <thead>
                <tr>
                  <th>Fecha de Entrada</th>
                  <th>Nombre del Artículo</th>
                  <th>Cantidad</th>
                  <th>Fecha de Caducidad</th>
                  <b>
                   <b>
                   
                    <td><center><b>Editar</b></center></td>
                  
                    <td><center><b>Borrar</b></center></td>
                  
                  </tr>
                </thead>
                <tbody>
                 @foreach($entradas as $entradas)
                 <tr class="gradeA">
                  <td> {{$entradas->fechaEntrada}}</td>
                  <td> {{$entradas->nomArticulo}}</td>
                  <td> {{$entradas->cantidad}}</td>
                  <td> {{$entradas->fechaCaducidad}}</td>

                 
                  <td class="center">
                    <a href="{{URL::action('EntradasController@edit',$entradas->id)}}" class="btn btn-primary btn-sm" role="button"><i class="fa fa-edit"></i></a>                    
                  </td>
                
                  <td class="center">
                    <a class="btn btn-danger btn-sm" href="#modalEliminar" style="margin-right: 10px;"  
                    data-target="#modal-delete-{{$entradas->id}}" data-toggle="modal" role="button"><i class="fa fa-eraser"></i></a></i></a>
                  </td>
                  

                </tr>
                @include('entradas.modal')
                @endforeach

              </tbody>
              <tfoot>
                <tr>

                  <th>Fecha de Entrada</th>
                  <th>Nombre del Artículo</th>
                  <th>Cantidad</th>
                  <th>Fecha de Caducidad</th>

               
                  <td><center><b>Editar</b></center></td>
                  
                  <td><center><b>Borrar</b></center></td>
                 

                </tr>
              </tfoot>
            </table>
          </div><!--/table-responsive-->
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->


  @endsection
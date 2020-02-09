@extends('layouts.principal')
@section('contenido')
<!--\\\\\\\ contentpanel start\\\\\\-->
<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Inicio</h1>
    <h2 class="">Almacenes</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li ><a style="color: #808080" href="?c=Inicio">Inicio</a></li>
      <li class="active"><a style="color: #808080">Almacenes</a></li>
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
              <h2 class="content-header theme_color" style="margin-top: -5px;">&nbsp;&nbsp;Almacenes</h2>
            </div>
            <div class="col-md-5">
              <div class="btn-group pull-right">
                <b>

                  <div class="btn-group" style="margin-right: 10px;">
                   
                    <a class="btn btn-sm btn-success tooltips" href="almacenes/create" style="margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Registrar Nuevo Almacén"> <i class="fa fa-plus"></i> Registrar </a>
                   

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
                  <th>Nombre</th>
                  <b>
                   <b>
                    
                    <td><center><b>Editar</b></center></td>
                 
                    <td><center><b>Borrar</b></center></td>
                  

                  </tr>
                </thead>
                <tbody>
                 @foreach($almacenes as $almacen)
                 <tr class="gradeA">
                  <td> {{$almacen->nombre}}</td>

                  <td class="center">
                    <a href="{{URL::action('AlmacenController@edit',$almacen->id)}}" class="btn btn-primary btn-sm" role="button"><i class="fa fa-edit"></i></a>                    
                  </td>
                
                  <td class="center">
                    <a class="btn btn-danger btn-sm" href="#modalEliminar" style="margin-right: 10px;"  
                    data-target="#modal-delete-{{$almacen->id}}" data-toggle="modal" role="button"><i class="fa fa-eraser"></i></a></i></a>
                  </td>
               

                </tr>
                @include('almacen.modal')
                @endforeach


              </tbody>
              <tfoot>
                <tr>

                  <th>Nombre</th>

            
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
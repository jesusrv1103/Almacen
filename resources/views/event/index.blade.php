@extends('layouts.principal')
@section('contenido')
<!--\\\\\\\ contentpanel start\\\\\\-->
<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Inicio</h1>
    <h2 class="">Eventos</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a style="color: #808080" href="?c=Inicio">Inicio</a></li>
      <li class="active">Eventos</a></li>
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
              <h2 class="content-header theme_color" style="margin-top: -5px;">&nbsp;&nbsp;Eventos</h2>
            </div>
            <div class="col-md-5">
              <div class="btn-group pull-right">
                <b>

              
                  <div class="btn-group" style="margin-right: 10px;">
                    <a class="btn btn-sm btn-success tooltips" href="{{URL::action('EventController@create')}}" style="margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Registrar nuevo Evento"> <i class="fa fa-plus"></i> Registrar </a>
                  </div>
                  
                  <div class="btn-group" style="margin-right: 10px;">
                    <a class="btn btn-sm btn-warning tooltips" href="{{URL::action('EventController@index')}}" style="margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ir al calaendario de Actividades"> <i class="fa fa-calendar-o"></i> Calendario </a>
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
                  <th>Inicio</th>
                  <th>Final</th>

                
                  <td><center><b>Editar</b></center></td>
                  
                  <td><center><b>Borrar</b></center></td>
                 
                </tr>
              </thead>
              <tbody>
               @foreach($events as $calendario)
               <tr class="gradeA">
                <td>{{$calendario->title}}</td>
                <td>{{$calendario->start_date}}</td>
                <td>{{$calendario->end_date}}</td>

               
                <td class="center">
                  <a href="{{URL::action('EventController@edit',$calendario->id)}}" class="btn btn-primary btn-sm" role="button"><i class="fa fa-edit"></i></a>                    
                </td>
               

               
                <td class="center">
                 <a class="btn btn-danger btn-sm" href="#modalEliminar" style="margin-right: 10px;"  
                 data-target="#modal-delete-{{$calendario->id}}" data-toggle="modal" role="button"><i class="fa fa-eraser"></i></a></i></a>
               </td>
              

             </tr>
             @include('event.modal')
             @endforeach



           </tbody>
           <tfoot>
            <tr>
              <th>Nombre</th>
              <th>Inicio</th>
              <th>Final</th>

           
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
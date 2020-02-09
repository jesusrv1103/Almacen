@extends('layouts.principal')
@section('contenido')
<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Eventos</h1>
    <h2 class="">Evento</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a style="color: #808080" href="?c=Inicio">Inicio</a></li>
      <li><a style="color: #808080" href="?c=localidad">Evento</a></li>
      <li class="active">Alta Evento</li>
    </ol>
  </div>
</div>
<div class="container clear_both padding_fix">
  <div class="row">
    <div class="col-md-12">
      <div class="block-web">
        <div class="header">
          <div class="row" style="margin-top: 15px; margin-bottom: 12px;">
            <div class="col-sm-8">
              <div class="actions"> </div>
              <h2 class="content-header theme_color" style="margin-top: -5px;">Registrar Evento</h2>
            </div>
            <div class="col-md-4">
              <div class="btn-group pull-right">
                <div class="actions"> 
                </div>
              </div>
            </div>    
          </div>
        </div>



        <div class="porlets-content">
          <form action="{{route('events.store')}}" method="POST" class="form-horizontal row-border"  parsley-validate novalidate>
           {{csrf_field()}}


           <div class="form-group">
            <label class="col-sm-3 control-label">Titulo del Evento<strog class="theme_color">*</strog></label>
            <div class="col-sm-6">

             <input onchange="mayus(this);" type="text" class="form-control"  autofocus name="title" id="title" 
             maxlength="40" required value="" placeholder="Ingrese el Nombre del Evento">
           </div>
         </div><!--/form-group-->


         <div class="form-group">
          <label class="col-sm-3 control-label">Inicio del Evento: <strog class="theme_color">*</strog></label>
          <div class="col-sm-6">
            <input class="form-control mask"
            data-inputmask="'alias': 'date'" type="text"  name="start_date" required  id="fecha" parsley-regexp="^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$">
            <span  style="color: #C0392B;" id="errorFecha"></span>
          </div>
        </div><!--/form-group-->


        <div class="form-group">
          <label class="col-sm-3 control-label">Finalización del Evento: <strog class="theme_color">*</strog></label>
          <div class="col-sm-6">
            <input class="form-control mask"
            data-inputmask="'alias': 'date'" type="text"  name="end_date" required  id="fecha1" parsley-regexp="^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$">
            <span  style="color: #C0392B;" id="errorFecha1"></span>
          </div>
        </div><!--/form-group-->



        <div class="form-group">
          <div class="col-sm-offset-7 col-sm-5">
            <button type="submit" id="submit" class="btn btn-primary">Guardar</button>
            <a href="{{URL::action('EventController@index1')}}" class="btn btn-default"> Cancelar</a>
          </div>
        </div><!--/form-group-->
      </form>
    </div><!--/porlets-content-->
  </div><!--/block-web-->
</div><!--/col-md-12-->
</div><!--/row-->
</div><!--/container clear_both padding_fix--> 

@endsection
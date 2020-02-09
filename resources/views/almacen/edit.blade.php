@extends('layouts.principal')
@section('contenido')

<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Almacenes</h1>
    <h2 class="">Editar Almacén</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a style="color: #808080" href="?c=Inicio">Inicio</a></li>
      <li><a style="color: #808080" href="?c=localidad">Almacenes</a></li>
      <li class="active">Editar Almacén</li>
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
              <h2 class="content-header theme_color" style="margin-top: -5px;">Editar Almacén</h2>
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
          <form action="{{url('almacenes',[$almacenes->id])}}" method="post" class="form-horizontal row-border" parsley-validate novalidate>
            {{csrf_field()}}

            <input type="hidden" name="_method" value="PUT">

            <div class="form-group">
              <label class="col-sm-3 control-label">Nombre Almacén<strog class="theme_color">*</strog></label>
              <div class="col-sm-6">
               <input onchange="mayus(this);" maxlength="45" name="nombre" class="form-control" required value="{{$almacenes->nombre}}" placeholder="Ingrese el nombre de el Almacén" />
             </div>
           </div><!--/form-group-->

           <div class="form-group">
            <div class="col-sm-offset-7 col-sm-5">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="{{url('/almacenes')}}" class="btn btn-default"> Cancelar</a>
          
            </div>
          </div><!--/form-group-->
        </form>
      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->
</div><!--/container clear_both padding_fix--> 


@endsection
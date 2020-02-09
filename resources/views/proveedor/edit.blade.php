 @extends('layouts.principal')
 @section('contenido')

 <div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Proveedores</h1>
    <h2 class="">Editar Proveedor</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a style="color: #808080" href="?c=Inicio">Inicio</a></li>
      <li><a style="color: #808080" href="?c=localidad">Proveedores</a></li>
      <li class="active">Editar Proveedor</li>
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
              <h2 class="content-header theme_color" style="margin-top: -5px;">Editar Proveedor</h2>
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
          <form action="{{url('proveedores',[$proveedores->id])}}" method="POST" class="form-horizontal row-border"  parsley-validate novalidate>
           {{csrf_field()}}

           <input type="hidden" name="_method" value="PUT">

           <div class="form-group">
            <label class="col-sm-3 control-label">Nombre Proveedor<strog class="theme_color">*</strog></label>
            <div class="col-sm-6">
              <input name="nombre" id="nombre" onchange="mayus(this);" type="text" required value="{{$proveedores->nombre}}" class="form-control" maxlength="50" placeholder="Ingrese el Nombre del Proveedor">
            </div>
          </div><!--/form-group-->

          <div class="form-group">
            <label class="col-sm-3 control-label">RFC: <strog class="theme_color">*</strog></label>
            <div class="col-sm-6">
              <input name="rfc"  maxlength="20" id="rfc" name="rfc"  required value="{{$proveedores->rfc}}" type="text" required parsley-regexp="([A-Z,Ñ,&]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[A-Z|\d]{3})"   required parsley-rangelength="[12,13]"  onkeyup="mayus(this);"  class="form-control"   class="form-control" required placeholder="Ingrese RFC del Cliente"/>
              <div class="text-danger" id='error_rfc'>{{$errors->formulario->first('rfc')}}</div>
            </div>
          </div>

          <div class="form-group">

           <label class="col-sm-3 control-label">Dirección: <strog class="theme_color">*</strog></label>
           <div class="col-sm-6">
            <input name="direccion" id="direccion" onchange="mayus(this);" type="text" name="direccion" required value="{{$proveedores->direccion}}" class="form-control" maxlength="90" placeholder="Ingrese Direccion del proveedor"/>
          </div>
        </div><!--/form-group-->



        <div class="form-group">
          <div class="col-sm-offset-7 col-sm-5">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{url('/proveedores')}}" class="btn btn-default"> Cancelar</a>
          </div>
        </div><!--/form-group-->
      </form>
    </div><!--/porlets-content-->
  </div><!--/block-web-->
</div><!--/col-md-12-->
</div><!--/row-->
</div><!--/container clear_both padding_fix--> 


@endsection
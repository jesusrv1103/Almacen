@extends('layouts.principal')
@section('contenido')
<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Entrada de Artículos</h1>
    <h2 class="">Editar Entrada de Artículo</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a style="color: #808080"  href="?c=Inicio">Inicio</a></li>
      <li><a style="color: #808080"  href="?c=localidad">Articulo</a></li>
      <li style="color: #808080"  class="active">Editar Entrada de Artículo</li>
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
              <h2 class="content-header theme_color" style="margin-top: -5px;">Editar Entrada de Artículos</h2>
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
          <div class="porlets-content">
            <form action="{{url('entradas',[$entradas->id])}}" method="post" class="form-horizontal row-border" parsley-validate novalidate>



              {{csrf_field()}}
              <!--este  no esta  agregarlo en todos -->

              <input type="hidden" name="_method" value="PUT">

              <div class="form-group">
                <label class="col-sm-3 control-label">Fecha de Entrada del Artículo: <strog class="theme_color">*</strog></label>
                <div class="col-sm-6">
                  <input type="text" class="form-control mask" name="fechaEntrada" value="{{$entradas->fechaEntrada}}"  required value=""
                  data-inputmask="'alias': 'date'" parsley-regexp="^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$">
                </div>
              </div><!--/form-group-->


              <div class="form-group">
                <label class="col-sm-3 control-label">Nombre del Artículo<strog class="theme_color">*</strog></label>
                <div class="col-sm-6">
                  <select name="idArticulos" class="form-control" required>
                    @foreach($articulos as $articulos)
                    @if($articulos->id == $entradas->idArticulos)
                    <option value="{{$articulos->id}}" selected>
                      {{$articulos->nombre}}
                    </option>
                    @else
                    <option value="{{$articulos->id}}" >
                      {{$articulos->nombre}}
                    </option>
                    @endif
                    @endforeach
                  </select>
                  <div class="help-block with-errors"></div>
                </div>
              </div><!--/form-group-->


              


              <div class="form-group">
                <label class="col-sm-3 control-label">Cantidad Artículo: <strog class="theme_color">*</strog></label>
                <div class="col-sm-6">
                 <input onkeypress="return soloNumeros(event);" required value="{{$entradas->cantidad}}"  type="text" class="form-control"  autofocus name="cantidad" maxlength="12" placeholder="Ingrese la cantidad del Articulo">
               </div>
             </div><!--/form-group-->


             <div class="form-group">
              <label class="col-sm-3 control-label">Fecha de Caducidad: <strog class="theme_color">*</strog></label>
              <div class="col-sm-6">
                <input type="text" class="form-control mask" name="fechaCaducidad"
                data-inputmask="'alias': 'date'" value="{{$entradas->fechaCaducidad}}" parsley-regexp="^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$">
              </div>
            </div><!--/form-group-->


            <div class="form-group">
              <div class="col-sm-offset-7 col-sm-5">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{url('/entradas')}}" class="btn btn-default"> Cancelar</a>
              </div>
            </div><!--/form-group-->
          </form>
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->
</div><!--/container clear_both padding_fix--> 


@endsection
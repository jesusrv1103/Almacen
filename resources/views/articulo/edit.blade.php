@extends('layouts.principal')
@section('contenido')

<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Articículos</h1>
    <h2 class="">Editar Articulo</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a  style="color: #808080" href="?c=Inicio">Inicio</a></li>
      <li><a  style="color: #808080" href="?c=localidad">Artículo</a></li>
      <li style="color: #808080" class="active">Editar  Artículo</li>
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
              <h2 class="content-header theme_color" style="margin-top: -5px;">Editar Artículo</h2>
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
            <form action="{{url('articulos',[$articulos->id])}}" method="post" class="form-horizontal row-border" parsley-validate novalidate>
              {{csrf_field()}}

              <input type="hidden" name="_method" value="PUT">

              <div class="form-group">
                <label class="col-sm-3 control-label">Nombre Artículo<strog class="theme_color">*</strog></label>
                <div class="col-sm-6">

                  <input onchange="mayus(this);"  type="text" class="form-control" autofocus name="nombre" id="nombre" 
                  maxlength="70" required value="{{$articulos->nombre}}" placeholder="Ingrese el Nombre del Artículo">
                </div>
              </div><!--/form-group-->
              <div class="form-group">



                <!-- autofocus name="nombre" id="nombre" -->





                <label class="col-sm-3 control-label">Cantidad Artículo: <strog class="theme_color">*</strog></label>
                <div class="col-sm-6">
                 <input onkeypress="return soloNumeros(event);" type="text" required class="form-control"  autofocus name="cantidad" maxlength="12" placeholder="Ingrese la cantidad del Artículo" value="{{$articulos->cantidad}}">
               </div>
             </div><!--/form-group-->




             <div class="form-group">
              <label class="col-sm-3 control-label">Almacén<strog class="theme_color">*</strog></label>
              <div class="col-sm-6">
                <select name="idAlmacen" class="form-control" required>
                  @foreach($almacenes as $almacen)
                  @if($articulos->idAlmacen==$almacen->id)
                  <option value="{{$almacen->id}}" selected="">
                    {{$almacen->nombre}}
                  </option>
                  @else
                  <option value="{{$almacen->id}}">
                    {{$almacen->nombre}}
                  </option>
                  @endif
                  @endforeach
                </select>
                <div class="help-block with-errors"></div>
              </div>
            </div><!--/form-group-->


            <div class="form-group">
              <label class="col-sm-3 control-label">Unidad de Medida:<strog class="theme_color">*</strog></label>
              <div class="col-sm-6">
                <select class="form-control" name="UnidadMedidad" required >
                  @foreach($unidades as $unidad)
                  @if($articulos->idUnidad == $unidad->id)
                  <option value="{{$unidad->id}}" selected=""> 
                   {{$unidad->nombre}}         
                 </option>
                 @else
                 <option value="{{$unidad->id}}"> 
                   {{$unidad->nombre}}         
                 </option>
                 @endif
                 @endforeach
               </select>

             </div>
           </div><!--/form-group-->




           <div class="form-group">
            <label class="col-sm-3 control-label">Fecha Caducidad: <strog class="theme_color">*</strog></label>
            <div class="col-sm-6">
            <input type="text" class="form-control mask" name="fechaCaducidad" data-inputmask="'alias': 'date'" id="fecha" parsley-regexp="^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$"
              value="{{$articulos->fechaCaducidad}}">
              <span  style="color: #C0392B;" id="errorFecha"></span>
            </div>
          </div><!--/form-group-->


          <div class="form-group">
            <label class="col-sm-3 control-label">Tipo Artículo:<strog class="theme_color">*</strog></label>
            <div class="col-sm-6">
              <select class="form-control" name="tipoArticulo" required >
                @if($articulos->tipoArticulo=="CONSUMIBLE")
                <option value="CONSUMIBLE" selected> 
                  CONSUMIBLE         
                </option>
                <option value="PAPELERIA"> 
                 PAPELERIA           
               </option>
               @else
               <option value="PAPELERIA" selected> 
                 PAPELERIA           
               </option>
               <option value="CONSUMIBLE" > 
                 CONSUMIBLE           
               </option>
               @endif

             </select>
           </div>
         </div><!--/form-group-->

         <div class="form-group">
          <label class="col-sm-3 control-label">Partida<strog class="theme_color">*</strog></label>
          <div class="col-sm-6">
            <select name="idPartida" class="form-control" required>
              @foreach($partidas as $partida)
              @if($articulos->idPartida==$partida->id)
              <option value="{{$partida->id}}" selected="">
                {{$partida->numeroPartida}}
              </option>
              @else

              <option value="{{$partida->id}}" >
                {{$partida->numeroPartida}}
              </option>
              @endif
              @endforeach
            </select>
            <div class="help-block with-errors"></div>
          </div>
        </div><!--/form-group-->

        <div class="form-group">
          <div class="col-sm-offset-7 col-sm-5">
            <button type="submit" id="submit" class="btn btn-primary">Guardar</button>
            <a href="{{url('/articulos')}}" class="btn btn-default"> Cancelar</a>
          </div>
        </div><!--/form-group-->
      </form>
    </div><!--/porlets-content-->
  </div><!--/block-web-->
</div><!--/col-md-12-->
</div><!--/row-->
</div><!--/container clear_both padding_fix--> 


@endsection
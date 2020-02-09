@extends('layouts.principal')
@section('contenido')

<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Artículos</h1>
    <h2 class="">Registrar Artículo</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a style="color: #808080" class="text-secondary" href="?c=Inicio">Inicio</a></li>
      <li><a  style="color: #808080" class="text-secondary" href="?c=localidad">Artículo</a></li>
      <li style="color: #808080" class="active">Alta Artículo</li>
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
              <h2 class="content-header theme_color" style="margin-top: -5px;">Registrar Artículo</h2>
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
            <form action="{{route('articulos.store')}}" method="post" class="form-horizontal row-border" parsley-validate novalidate>
              {{csrf_field()}}
              <!--este  no esta  agregarlo en todos -->

              <div class="form-group">
                <label class="col-sm-3 control-label">Nombre Artículo<strog class="theme_color">*</strog></label>
                <div class="col-sm-6">

                 <input onchange="mayus(this);" type="text" class="form-control"  autofocus name="nombre" id="nombre" 
                 maxlength="70" required value="" placeholder="Ingrese el Nombre del Artículo">
               </div>
             </div><!--/form-group-->
             <div class="form-group">

              <label class="col-sm-3 control-label">Cantidad Artículo: <strog class="theme_color">*</strog></label>
              <div class="col-sm-6">
               <input onkeypress="return soloNumeros(event);" required value="" type="text" class="form-control"  autofocus name="cantidad" maxlength="12" placeholder="Ingrese la cantidad del Artículo">
             </div>
           </div><!--/form-group-->




           <div class="form-group">
            <label class="col-sm-3 control-label">Almacén<strog class="theme_color">*</strog></label>
            <div class="col-sm-6">
              <select name="idAlmacen" class="form-control" required>
                @foreach($almacenes as $almacen)
                <option value="{{$almacen->id}}">
                  {{$almacen->nombre}}
                </option>
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
                <option value="{{$unidad->id}}"> 
                 {{$unidad->nombre}}         
               </option>
               @endforeach
             </select>
             
           </div>
         </div><!--/form-group-->
         
         <div class="form-group">
          <label class="col-sm-3 control-label">Fecha Caducidad: <strog class="theme_color">*</strog></label>
          <div class="col-sm-6">
            <input type="text" class="form-control mask" name="fechaCaducidad" data-inputmask="'alias': 'date'" 
            id="fecha" parsley-regexp="^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$" >
            
            

          </div>
        </div><!--/form-group-->


        <div class="form-group">
          <label class="col-sm-3 control-label">Tipo Artículo:<strog class="theme_color">*</strog></label>
          <div class="col-sm-6">
            <select class="form-control" name="tipoArticulo" required id="ambito">
              <option value="CONSUMIBLE"> 
                CONSUMIBLE         
              </option>
              <option value="PAPELERIA"> 
               PAPELERIA           
             </option>
               


           </select>
         </div>
       </div><!--/form-group-->

       <div class="form-group">
        <label class="col-sm-3 control-label">Partida<strog class="theme_color">*</strog></label>
        <div class="col-sm-6">
          <select name="idPartida" class="form-control" required>
            @foreach($partidas as $partida)
            <option value="{{$partida->id}}">
              {{$partida->numeroPartida}}
            </option>
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
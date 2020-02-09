@extends('layouts.principal')
@section('contenido')

<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Inicio</h1>
    <h2 class="">Partidas</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a style="color: #808080" href="?c=Inicio">Inicio</a></li>
      <li><a style="color: #808080" href="?c=localidad">Partidas</a></li>
      <li class="active">Editar Partida</li>
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
              <h2 class="content-header theme_color" style="margin-top: -5px;">Editar Presupuesto de Partida</h2>
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
          <form action="{{url('partidas2',[$partidas->id])}}" method="POST" class="form-horizontal row-border"   parsley-validate novalidate>

           {{csrf_field()}}

           <input type="hidden" name="_method" value="PUT">


           <input  type ="hidden"  name="idPartida" value="{{$partidas->idPartida}}"/>

           <div class="form-group">
            <label class="col-sm-3 control-label">Meses<strog class="theme_color">*</strog></label>
            <div class="col-sm-4">
              <select name="idMes" class="form-control" required>

                @foreach($meses as $mes)
                @if($mes->id== $partidas->idMes)
                <option value="{{$mes->id}}" selected="">
                  {{$mes->nombre_mes}}
                </option>
                @else
                <option value="{{$mes->id}}" >
                  {{$mes->nombre_mes}}
                </option>
                @endif
                @endforeach
              </select>
              <div class="help-block with-errors"></div>
            </div>
          </div><!--/form-group-->




          <div class="form-group">    
            <label class="col-sm-3 control-label">Presupuesto Asignado: <strog class="theme_color">*</strog></label>
            <div class="col-sm-4">
              <div class="input-group">
               <div class="input-group-addon">$</div>


               <input name="presupuestoA" maxlength="9" type="text" value="{{$partidas->presupuestoAsignado}}" min="1" max='9999999' step="100" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" required value="" placeholder="Ingresar el Saldo" onkeypress=" return soloNumeros(event);"/>
             </div>
           </div>
         </div>

         <div class="form-group">    
          <label class="col-sm-3 control-label">Presupuesto Gastado: <strog class="theme_color">*</strog></label>
          <div class="col-sm-4">
            <div class="input-group">
             <div class="input-group-addon">$</div>


             <input name="presupuestoG" maxlength="9" type="text" value="{{$partidas->presupuestoGastado}}" min="1" max='9999999' step="100" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" required value="" placeholder="Ingresar el Saldo " onkeypress=" return soloNumeros(event);"/>
           </div>
         </div>
       </div>




       <div class="form-group">
        <div class="col-sm-offset-7 col-sm-5">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <a href="{{url('/partidas')}}" class="btn btn-default"> Cancelar</a>
        </div>
      </div><!--/form-group-->
    </form>
  </div><!--/porlets-content-->
</div><!--/block-web-->
</div><!--/col-md-12-->
</div><!--/row-->
</div><!--/container clear_both padding_fix--> 


@endsection
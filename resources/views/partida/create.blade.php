@extends('layouts.principal')
@section('contenido')

<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Partidas</h1>
    <h2 class="">Registrar Partida</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a style="color: #808080" href="?c=Inicio">Inicio</a></li>
      <li><a style="color: #808080" href="?c=localidad">Partidas</a></li>
      <li class="active">Alta Partida</li>
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
              <h2 class="content-header theme_color" style="margin-top: -5px;">Registrar Partida</h2>
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
          <form action="{{route('partidas.store')}}" method="POST" class="form-horizontal row-border"  parsley-validate novalidate>
           {{csrf_field()}}

           <div class="form-group">
            <label class="col-sm-3 control-label">Año:<strog class="theme_color">*</strog></label>
            <div class="col-sm-6">
              <select class="form-control" name="ano" required id="ambito">
                <option value="2017"> 
                 2017         
               </option>
               <option value="2018"> 
                 2018           
               </option>

               <option value="2019"> 
                 2019          
               </option>

               <option value="2020"> 
                 2020          
               </option>

               <option value="2021"> 
                 2021          
               </option>

               <option value="2022"> 
                 2022          
               </option>

               <option value="2023"> 
                 2023          
               </option>
             </select>
           </div>
         </div><!--/form-group-->




         <div class="form-group">
          <!-- autofocus name="nombre" id="nombre" -->
          <label class="col-sm-3 control-label">Número de Partida: <strog class="theme_color">*</strog></label>
          <div class="col-sm-6">
           <input onkeypress="return soloNumeros(event);" required value="" class="form-control"  name="numeroPartida" id="numeroPartida" autofocus name="cantidad" maxlength="5" placeholder="Ingrese el Número de Partida">
         </div>
       </div><!--/form-group-->

       <div class="form-group">

         <label class="col-sm-3 control-label">Concepto de Partida: <strog class="theme_color">*</strog></label>
         <div class="col-sm-6">
          <input name="concepto" id="concepto" onchange="mayus(this);" type="text" required value="" class="form-control" maxlength="90" required value="" placeholder="Ingrese Partida"/>
        </div>
      </div><!--/form-group-->

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
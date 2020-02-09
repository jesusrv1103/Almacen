@extends('layouts.principal')
@section('contenido')

<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Inicio</h1>
    <h2 class="">Usuario</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a style="color: #808080" href="?c=Inicio">Inicio</a></li>
      <li><a style="color: #808080" href="?c=localidad">Usuario</a></li>
      <li class="active">Alta Usuario</li>
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
              <h2 class="content-header theme_color" style="margin-top: -5px;">Registrar Usuario</h2>
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
            <form action="{{route('users.store')}}" method="POST" class="form-horizontal row-border"  parsley-validate novalidate>
             {{csrf_field()}}


             <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label class="col-sm-3 control-label">Nombre(s)<strog class="theme_color">*</strog></label>
              <div class="col-sm-6">

               <input onchange="mayus(this);" type="text" class="form-control"  autofocus name="name" id="name" 
               maxlength="50" required  placeholder="Ingrese el Nombre completo del Usuario">
               @if ($errors->has('name'))
               <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
              @endif
            </div>
          </div><!--/form-group-->


          <div class="form-group{{ $errors->has('nombreusuario') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Nombre de Usuario(s)<strog class="theme_color">*</strog></label>
            <div class="col-sm-6">

              <input  type="text" class="form-control"  autofocus name="nombreusuario" id="nombreusuario" 
              maxlength="50" required value="" placeholder="Ingrese el nombre de Usuario">
              @if ($errors->has('nombreusuario'))
              <span class="help-block">
                <strong>{{ $errors->first('nombreusuario') }}</strong>
              </span>
              @endif
            </div>
          </div><!--/form-group-->

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Contraseña: </label>
            <div class="col-sm-6">
              <input id="pass1" type="password" name ="password" placeholder="Contraseña" required class="form-control">
              @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>
          </div><!--/form-group-->


          <div class="form-group">
            <label class="col-sm-3 control-label">Repetir Contraseña</label>
            <div class="col-sm-6">
              <input parsley-equalto="#pass1" type="password" required placeholder="Contraseña" class="form-control">
            </div>
          </div><!--/form-group-->

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Email: <strog class="theme_color">*</strog></label>
            <div class="col-sm-6">

              <input  name="email" value="" required parsley-type="email" class="form-control mask" placeholder="Ingrese email de la empresa" maxlength="30" parsley-rangelength="[1,30]"/>
              @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif

            </div>
          </div>


          <div class="form-group">
            <label class="col-sm-3 control-label">Tipo de Usuario:<strog class="theme_color">*</strog></label>
            <div class="col-sm-6">
              <select class="form-control" name="id" required id="ambito">

                @foreach($roles  as $rol)
                <option value="{{$rol->id}}"> 
                  {{$rol->name}}
                </option>
                @endforeach
              </select>
            </div>
          </div><!--/form-group-->




          <div class="form-group{{ $errors->has('idDireccion') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Departamento<strog class="theme_color">*</strog></label>
            <div class="col-sm-6">
              <select name="idDireccion" class="form-control" required>
                @foreach($direcciones as $direccion)
                <option value="{{$direccion->id}}">
                  {{$direccion->nombre}}
                </option>
                @endforeach
              </select>
              <div class="help-block with-errors"></div>
              @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>
          </div><!--/form-group-->



          <div class="form-group">
            <div class="col-sm-offset-7 col-sm-5">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="{{url('/users')}}" class="btn btn-default"> Cancelar</a>
            </div>
          </div><!--/form-group-->
        </form>
      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->
</div><!--/container clear_both padding_fix--> 
@endsection
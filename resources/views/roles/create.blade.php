  @extends('layouts.principal')
  @section('contenido')

  <div class="pull-left breadcrumb_admin clear_both">
    <div class="pull-left page_title theme_color">
      <h1>Inicio</h1>
      <h2 class="">Roles y permisos</h2>
    </div>
    <div class="pull-right">
      <ol class="breadcrumb">
        <li><a style="color: #808080" href="?c=Inicio">Inicio</a></li>
        <li><a style="color: #808080" href="?c=localidad">Roles y Permisos</a></li>
        <li class="active">Crear Rol y/o Permiso</li>
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
                <h2 class="content-header theme_color" style="margin-top: -5px;">Crear Rol y/o Permiso</h2>
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
            <form  action="{{route('roles.store')}}" method="POST" class="form-horizontal row-border" >
              {{csrf_field()}}


              <div class="form-group">
                <label class="col-sm-3 control-label">Rol<strog class="theme_color">*</strog></label>
                <div class="col-sm-6">
                  <input name="name" id="name" onchange="mayus(this);" type="text" required value="" class="form-control" maxlength="50" placeholder="Ingrese el Nombre del Rol">
                </div>
              </div><!--/form-group-->

              <div class="form-group">
                <label class="col-sm-3 control-label">URL amigable: <strog class="theme_color">*</strog></label>
                <div class="col-sm-6">
                  <input maxlength="20" id="slug" name="slug"   type="text" onkeyup="mayus(this);"  class="form-control"   class="form-control" required placeholder="URL AMIGABLE"/>
                  <div class="text-danger" id='error_rfc'>{{$errors->formulario->first('rfc')}}</div>
                </div>
              </div>

              <div class="form-group">

               <label class="col-sm-3 control-label">Descripcion: <strog class="theme_coalor">*</strog></label>
               <div class="col-sm-6">
                <input name="description" id="description" onchange="mayus(this);" type="text" required value="" class="form-control" maxlength="90" placeholder="Descripcion"/>
              </div>
            </div><!--/form-group-->


            <div class="form-group">
              <label class="col-sm-3 control-label">Permiso Especial</label>
              <div class="col-sm-9">
                <div class="radio">
                  <label >
                    <input type="radio" name="special" id="special" class="noseleccionar" value="all-access" checked="">
                  Acceso Total </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="special" id="special" class="noseleccionar" value="no-access">
                  Ningun Acceso </label>
                </div>
                <!-- AQUI AGREGUE EL TERCER RADIO -->
                <div class="radio">
                  <label>
                     <input type="radio" name="special2" id="special2" class="seleccionar">
                  Seleccionar Accesos </label>
                </div>
              </div>
            </div>

            <div id="permisos" class="form-group" style="display: none;" >
              <label class="col-sm-3 control-label">Lista de Permisos</label>

              <div class="col-sm-9">
                @foreach($permissions as $permiso)
                <div class="checkbox">
                  <label>
                    <input name="permissions[]" id="permissions[]" value="{{$permiso->id}}" type="checkbox">
                    <span class="custom-checkbox"></span> {{$permiso->description ?: 'Sin descripcion'}} </label>
                  </div>
                  @endforeach

                </div>
              </div>



              <div class="form-group">
                <div class="col-sm-offset-7 col-sm-5">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  <a href="{{url('/roles')}}" class="btn btn-default"> Cancelar</a>
                </div>
              </div><!--/form-group-->
            </form>
          </div><!--/porlets-content-->
        </div><!--/block-web-->
      </div><!--/col-md-12-->
    </div><!--/row-->
  </div><!--/container clear_both padding_fix--> 

  <script src=/js/jquery-3.3.1.min.js></script>
  <script>
    $('.seleccionar').change(function () {
      $("#permisos").css("display","block");
      $(".noseleccionar").prop('checked', false);
    });

    $('.noseleccionar').change(function () {
      if ($(this).is(":checked")) {
        $("#permisos").css("display","none");
        $("input:checkbox").prop('checked', false);
        $(".seleccionar").prop('checked', false);
      }
    });
    </script>


    @endsection
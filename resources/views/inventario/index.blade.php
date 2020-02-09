 @extends('layouts.principal')
 @section('contenido')


 <!--\\\\\\\ contentpanel start\\\\\\-->
 <div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Artículos</h1>
    <h2 class="">Inventario</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a style="color: #808080"  href="?c=Inicio">Inicio</a></li>
      <li style="color: #808080"  class="active">Inventario</a></li>
    </ol>
  </div>
</div>
<div class="container clear_both padding_fix">
  <div class="row">
    <div class="col-md-12">
      <div class="block-web">
        <div class="header">
          <div class="row" style="margin-top: 15px; margin-bottom: 12px;">
            <div class="col-sm-7">
              <div class="actions"> </div>
              <h2 class="content-header theme_color" style="margin-top: -5px;">&nbsp;&nbsp;Inventario</h2>
            </div>
            <div class="col-md-5">
              <div class="btn-group pull-right">
                <b>


                  @can('inventario.pdf')
                  <div class="btn-group" style="margin-right: 10px;">
                    <a class="btn btn-sm btn-warning tooltips" href="{{URL::action('InventarioController@pdf')}}" style="margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Descargar Inventario"> <i class="fa fa-download"></i> Descargar </a>
                  </div>
                  @endcan


                </b>
              </div>
            </div>
          </div>
        </div>


        <div class="porlets-content">
          <div class="table-responsive">
            <table  class="display table table-bordered table-striped" id="dynamic-table">
              <thead>
                <tr>
                  <th>Partida</th>
                  <th>Concepto de Partida</th>
                  <th>Descripción del Producto</th>
                  <th>Existecia</th>


                </tr>
              </thead>


              <tbody>
               @foreach($inventarios as $inventario)
               <td>{{$inventario->numeroPartida}}</td>
               <td>{{$inventario->concepto}}</td>
               <td>{{$inventario->nombre}}</td>
               <td>{{$inventario->cantidad}}</td>
               
               


             </tr>

             @endforeach
           </tbody>
           <tfoot>
            <tr>

              <th>Partida</th>
              <th>Concepto de Partida</th>
              <th>Descripción del Producto</th>
              <th>Existecia</th>




            </tr>
          </tfoot>
        </table>
      </div><!--/table-responsive-->
    </div><!--/porlets-content-->
  </div><!--/block-web-->
</div><!--/col-md-12-->
</div><!--/row-->




@endsection
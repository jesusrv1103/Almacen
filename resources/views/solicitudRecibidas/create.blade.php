@extends('layouts.principal')
@section('contenido')
<!--\\\\\\\ contentpanel start ver solicitudes boton de agragar cambio de ver solicitud \\\\\\-->
<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Solicitudes</h1>
    <h2 class="">Solicitud Recibida</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a style="color: #808080" href="?c=Inicio">Inicio</a></li>
      <li class="active">Solicitud Recibida</a></li>
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
              <h2 class="content-header theme_color" style="margin-top: -5px;">&nbsp;&nbsp;Petición de solicitud</h2>
            </div>
            <div class="col-md-5">
              <div class="btn-group pull-right">
                <b>

                  <div class="btn-group" style="margin-right: 10px;">
                    <a class="btn btn-sm btn-warning tooltips"  style="margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" href="" title="" data-original-title="Descargar solicitudes"> <i class="fa fa-download"  ></i> Descargar </a>



                  </div>

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
                  <th>Nombre del Artículo</th>
                  <th>U. Medida</th>
                  <th>Cantidad Disponible</th>
                  <th>Cantidad Pedida</th>
                  <th>Cantidad Asignada</th>
                  <th>Asignar Cantidad</th>

                </tr>
              </thead>
              <tbody>
      

      
              
                <tr class="gradeA">

                  <td>lapíz</td>
                  <td>PZA</td>
                  <td>1000</td>
                  <td>100</td>
                  <td></td>
                  <td> 
                    <center>
                      <a class="btn btn-success btn-sm" 
                      data-target="#modal-asignar-{{}}"
                      data-toggle="modal" style="margin-right: 10px;" 
                      role="button"><i class="fa fa-plus"></i></a>
                    </center>
                  </td>


                </tr>
            



              </tbody>
              <tfoot>
                <tr>
                  <th>Nombre del Artículo</th>
                  <th>U. Medida</th>
                  <th>Cantidad Disponible</th>
                  <th>Cantidad Pedida</th>
                  <th>Cantidad Asignada</th>
                  <th>Asignar Cantidad</th>


                </tr>
              </tfoot>
            </table>
          </div><!--/table-responsive-->
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->



  @endsection



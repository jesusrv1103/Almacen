@extends('layouts.principal')
@section('contenido')
<!--\\\\\\\ contentpanel start\\\\\\-->
<div class="pull-left breadcrumb_admin clear_both">
	<div class="pull-left page_title theme_color">
		<h1>Solicitudes</h1>
		<h2 class="">Solicitud Enviada</h2>
	</div>
	<div class="pull-right">
		<ol class="breadcrumb">
			<li><a style="color: #808080" href="?c=Inicio">Inicio</a></li>
			<li class="active">Solicitud Enviada</a></li>
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
							<h2 class="content-header theme_color" style="margin-top: -5px;">&nbsp;&nbsp;Detalle de Solicitud </h2>
						</div>
						<div class="col-md-5">
							<div class="btn-group pull-right">
								<b>

									<div class="btn-group" style="margin-right: 10px;">
										<a class="btn btn-sm btn-warning tooltips"  style="margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" href="{{URL::action('SolicitudRecibidasController@pdf',$solicitudesEnviadas->id)}}" title="" data-original-title="Descargar solicitudes"> <i class="fa fa-download"  ></i> Descargar </a>




									</div>

									<div class="btn-group" style="margin-right: 10px;">
										<a class="btn btn-sm btn-success tooltips"  style="margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" href="{{URL::action('SolicitudRecibidasController@create')}}" title="" data-original-title="Realizar Pedido"> <i class="fa fa-plus"  ></i> Realizar </a>
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
									<th>Cantidad Pedida</th>
									<th>U. Medida</th>
									
								</tr>
							</thead>
							<tbody>
								@foreach($verSolicitud as $solicitud)
								<tr class="gradeA">
									<td>{{$solicitud->nombre}}</td>
									<td>{{$solicitud->cantidadDetalleSolicitud}}</td>
									<td>{{$solicitud->unidad}}</td>	
								</tr>
								@include('solicitudEnviadas.modal')
								@endforeach
							</tbody>
							<tfoot>
								<tr>
									<th>Nombre del Artículo</th>
									<th>Cantidad Pedida</th>
									<th>U. Medida</th>
									
								</tr>
							</tfoot>
						</table>
					</div><!--/table-responsive-->
				</div><!--/porlets-content-->
			</div><!--/block-web-->
		</div><!--/col-md-12-->
	</div><!--/row-->



	@endsection












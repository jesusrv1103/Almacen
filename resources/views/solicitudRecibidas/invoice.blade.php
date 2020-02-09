<!DOCTYPE html>
<html>
<head>
	<title>COORDINACION ADMINISTRATIVA</title>
	
</head>
<body>
	<table style="text-align:left;">
		<tr>
			<td>
				<h3>COORDINACION ADMINISTRATIVA</h3>
				<h3>Control de Almacén</h3>

			</td>
			<br>
			<td style="align-content:center;" >
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="{{('images/sezac2.jpg')}}" width="40%" height="40%" alt="s-logo" />


			</table>


			<p ><center><font size="5">
				<strong>Entrega de Requisición</strong></font></center></p>
				<br>
				<br>
				<strong>Fecha:</strong> <label >{{date("m/d/Y")}}</label>  
				<br>
				<br>
				<strong>No Vale:</strong> {{$solicitudes->id}}
				<br>
				<br>
				<strong>Nombre:</strong> NOEMY DOLORES DE LA TORRE BELMONTES
				<br>
				<br>
				<strong>Area:</strong> VINCULACIÓN EDUCATIVA
				<br>
				<br>
				<strong>Uso Destinado:</strong> {{$solicitudes->UsoDestinado}}
				<br>
				<br>
				<br>
				<table width="center" border="1" cellpadding="0" cellspacing="0.3" bgcolor="whait">

					<tr width="100%" style="text-align: center;">

						
						<th height="80 px" width="13%">Cantidad</th>
						<th height="80 px" width="18%">Unidad Medida</th>
						<th height="80 px" width="32%">Descripción</th>
						<th height="80 px" width="14%">No. Partida</th>
						<th height="80 px" width="23%">Concepto</th>

					</tr>
					@foreach($verSolicitud as $articulo)
					<tr>
						<td style="padding-left: 4px;">{{$articulo->cantidad}}</td>
						<td style="padding-left: 4px;">{{$articulo->unidad}}</td>
						<td style="padding-left: 4px;">{{$articulo->nombre}}</td>
						<td style="padding-left: 4px;">222</td>
						<td style="padding-left: 4px;">MATERIALES Y UTILES DE OFICINA</td>
					</tr>
					@endforeach
				</table>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>

				<table width="center">

					<tr width="100%" style="text-align: center;">
						<th height="10 px" width="35%" style="border:1px solid #000; border-bottom: none; border-right: none; border-left: none border; ">María Fernanda Torres Guzmán</th>
						<th height="10 px" width="30%"></th>
						<th height="10 px" width="35%" style="border:1px solid #000; border-bottom: none; border-right: none; border-left: none border; ">jesus alejandro torre <br>Recibe</th>

					</table>


				</body>
				</html>
<!DOCTYPE html>
<html>
<head>
	<title>INVENTARIO GENERAL DE ARTICULOS</title>
	
</head>
<body>
	<table style="text-align:left;">
		<tr>

			<td>
				<h3>INVENTARIO GENERAL DE ARTICULOS</h3>
				

			</td>
			<td style="align-content:center;" >
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="{{('images/sezac2.jpg')}}" width="40%" height="40%" alt="s-logo" />


			</table>


			<p ><center><font size="5">
				<strong>Artículos</strong></font></center></p>
				<br>
				<br>
				<strong>Zacatecas Zac. A</strong>

				<label>{{date("d/m/y")}}   </label>




				<br>
				<br>
				<table width="center" border="1" cellpadding="0" cellspacing="0.1" bgcolor="whait">

					<tr width="100%" style="text-align: center;">

						
						<th height="80 px" width="10%">Partida</th>
						<th height="80 px" width="38%">Concepto de Partida</th>
						<th height="80 px" width="40%">Descripción del Producto</th>
						<th height="80 px" width="12%">Existencia</th>
						
					</tr>
					@foreach($inventarios as $inventario)
					<tr>
						<td style="padding-left: 4px;">{{$inventario->numeroPartida}}</td>
						<td style="padding-left: 4px;">{{$inventario->concepto}}</td>
						<td style="padding-left: 4px;">{{$inventario->nombre}}</td>
						<td style="padding-left: 4px;">{{$inventario->cantidad}}</td>
						
					</tr>
					@endforeach
				</table>
			</body>
			</html>
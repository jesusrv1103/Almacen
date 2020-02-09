<!DOCTYPE html>
<html>
<head>
	<title>Partida</title>
</head>
<body>

	<div align="right"> <img src="{{('images/sezac2.jpg')}}" width="40%" height="40%" alt="s-logo" /> </div>		
	<div align="center"><h1>Partidas</h1></div>

	<br>
	<br>

	<strong>Número de Partida: </strong>{{$conceptoPartidas->numeroPartida}}
	<br>
	<br>
	<strong>Nombre de Partida: </strong>{{$conceptoPartidas->concepto}}
	<br>
	<br>
	<strong>Año: </strong>{{$conceptoPartidas->ano}}
	<br>
	<br>




	<table width="center" border="1" cellpadding="0" cellspacing="0.3" bgcolor="whait">

		<tr width="100%" style="text-align: center;">




			<th height="80 px" width="25%" bgcolor="#EAECEE" style="font-size: 18px">mes</th>
			<th height="80 px" width="25%" bgcolor="#EAECEE" style="font-size: 18px">Presusto Asignado</th>
			<th height="80 px" width="30%" bgcolor="#EAECEE" style="font-size: 18px">Presupuesto Gastado</th>
			<th height="80 px" width="20%" bgcolor="#EAECEE" style="font-size: 18px">Diferencia</th>



		</tr>

		@foreach($partidas2 as $mesPartida)
		<tr>
			<td style="padding-left: 8px; font-size:18px ">{{$mesPartida->nombre_mes}} 
			<td style="padding-left: 8px; font-size:18px ">{{$mesPartida->presupuestoAsignado}}
			<td style="padding-left: 8px; font-size:18px ">{{$mesPartida->presupuestoGastado}}
			<td style="padding-left: 8px; font-size:18px ">{{$mesPartida->presupuestoAsignado- $mesPartida->presupuestoGastado}}

						</tr>
						@endforeach
					</table>





				</body>
				</html>
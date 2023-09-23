<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Lab02</title>
	</head>
	<body>
		<h3>Lab 02</h3>
		<?php
			$alumno = "karim";
			$geometria = 8.5;
			$ingles = 7.7;
			$matematica = 6.7;
			$programacion = 8.5;
			$basesDeDatos = 9.4;

			$alumnoDos = "Laura";
			$geometriaDos = 8.9;
			$inglesDos = 8.7;
			$matematicaDos = 9.7;
			$programacionDos = 9.5;
			$basesDeDatosDos = 9.2;

			$promedioUno = round(($geometria + $ingles + $matematica + $programacion + $basesDeDatos) / 5, 1 );
			$promedioDos = round(($geometriaDos + $inglesDos + $matematicaDos + $programacionDos + $basesDeDatosDos) / 5, 1 );
			$promedioGrupo = round(($promedioUno + $promedioDos) / 2, 1 );

			echo("
			<table border='1'>
			<caption>
				<strong>Boleta de Calificaciones</strong>
			</caption>
			<thead>
				<tr>
					<th>Alumno</th>
					<th>Geometría</th>
					<th>Inglés</th>
					<th>Matemática</th>
					<th>Programación</th>
					<th>Bases de datos</th>
					<th>Promedio</th>
				<tr>
			</thead>
			<tbody>
				<tr>
					<td>$alumno</td>
					<td>$geometria</td>
					<td>$ingles</td>
					<td>$matematica</td>
					<td>$programacion</td>
					<td>$basesDeDatos</td>
					<td>$promedioUno</td>
				</tr>
				<tr>
					<td>$alumnoDos</td>
					<td>$geometriaDos</td>
					<td>$inglesDos</td>
					<td>$matematicaDos</td>
					<td>$programacionDos</td>
					<td>$basesDeDatosDos</td>
					<td>$promedioDos</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan='6'>Promedio del grupo</td>
					<td>$promedioGrupo</td>
				</tr>
			</tfoot>
			</table>
			");
			
		?>
	</body>
</html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>probando</title>
	</head>
	<body>
		<?php

			$nombre = "Carlos";
			$direccion = "Calle A No. 111";
			$ciudad = "Viejo Leon";

			$datos = $nombre . " " . $direccion . " " . $ciudad;

			echo "Datos: $datos";

			echo "<br>";
			echo "<br>";



			echo <<<TextoLargo
			<br>Salario asignado para $nombre: 2000 euros
			<br>Mes: Noviembre
			<br>Año: 2020
			TextoLargo;
		?>
	</body>
</html>
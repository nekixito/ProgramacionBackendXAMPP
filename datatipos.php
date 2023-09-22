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


			$dolares = 999.99;
			$tipoDeCambio = 1.2;
			$euros = $dolares * $tipoDeCambio;


			printf("<br>Con printf(): El importe en euros es : %.2f" , $euros);

			echo "<br>";
			echo "Con round(): El importe en euros es : " . round($euros,2);


		?>
	</body>
</html>
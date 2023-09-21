<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>probando</title>
	</head>
	<body>
		<?php

			$nombre = "Carlos";
			$edad = 16;
			$en_edad_escolar = true;

			$edad = $edad + 2;

			echo $nombre . " " . $edad;


			//printf() formatea el valor de una variable para un tamaño dado de impresión.
			//El valor inicial de la variable es el mismo

			$tarifa = 13.637;
			echo "<br>tarifa es: " . $tarifa;
			printf("<br>tarifa con formato es: %.2f", $tarifa);

			//Con el método intval() hacemos conversiones de tipos de datos de double a integer.

			$tarifa = 13.637;
			$tarifa = intval($tarifa);

			echo "<br>";
			echo "tarifa en enteros es: " . $tarifa;

			//Con el método round(), se puede redondear un double a un integer

			$tarifa = 13.637;
			$tarifa = round($tarifa);

			echo "<br>";
			echo "tarifa redondeada a enteros es: " . $tarifa;

			$tarifa = 13.637;
			$tarifa = round($tarifa,2);

			echo "<br>";
			echo "tarifa redondeada con dos decimales: " . $tarifa;

			//Con el método doubleval() hacemos conversiones a double

			$otraTarifa = "13.637";
			echo "<br>otraTarifa en cadena es: " . $otraTarifa;
			$otraTarifa = doubleval($otraTarifa);
			echo "<br>otraTarifa en double es: " . $otraTarifa;

			//Tipo de datos booleano
			$menor_de_edad = true;
			$deportista = false;

			//El valor verdadero se puede mostrar como un 1 
			//El valor falso se puede mostar como un 0
			echo "<br>";
			//El método gettype() devuelve el tipo de datos que posee una variable
			$tarifaUno = 13.0;
			echo gettype($tarifaUno);
			echo "<br>";
			$tarifaDos = "diez";
			echo gettype($tarifaDos);

			echo "<br>";
			//Con el método settype() podemos convertir el tipo de datos de una variable a otro tipo de datos.
			$tarifaTres = 13.0;
			settype($tarifaTres,"string");
			echo "tarifaTres : " . $tarifaTres;
			$typeOne = gettype($tarifaTres);
			echo "<br>";
			echo "Tipo de datos de tarifaTres : " . $typeOne;
			echo "<br>";
			$tarifaCuatro = "33.99diez";
			settype($tarifaCuatro,"double");
			echo "tarifaCuatro : " . $tarifaCuatro;
			$typeTwo = gettype($tarifaCuatro);
			echo "<br>";
			echo "Tipo de datos de tarifaCuatro : " . $typeTwo;
		?>
	</body>
</html>
<html>
	<head>
		<title>4. Ejercicio</title>
	</head>
	<body>
	<?php
		$string = "Rojo Azul Amarillo Naranja Negro";
		$indices = explode(" ", strtolower($string));
		$valores= [];
		for ($i=0; $i < count($indices); $i++) { 
			$valores[$i]=strlen($indices[$i]);
		}
		
		$palabras = array_combine($indices, $valores);
		foreach ($palabras as $palabra => $longitud) {
			echo($palabra." tiene ".$longitud." caracteres</br>");
		}
	?>
	</body>
</html>
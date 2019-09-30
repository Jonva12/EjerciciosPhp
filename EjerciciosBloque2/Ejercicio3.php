<html>
	<head>
		<title>3. Ejercicio</title>
	</head>
	<body>
	<?php
		$numeros = [];
		$suma = 0;
		for ($i=0; $i < 20; $i++) { 
			$numeros[$i] = rand(1,20);
			echo $numeros[$i]."</br>";
			$suma+=$numeros[$i];
		}
		$media = $suma/count($numeros);
		$min = min($numeros);
		$max = max($numeros);
		echo('<div style="color:blue">Minimo '.$min."</div></br>");
		echo('<div style="color:green">Maximo '.$max."</div></br>");
		echo("Suma: ".$suma."</br>");
		echo("Media: ".$media."</br>");

		
	?>
	</body>
</html>
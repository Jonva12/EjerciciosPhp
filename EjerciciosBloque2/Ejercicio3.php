<html>
	<head>
		<title>3. Ejercicio</title>
	</head>
	<body>
	<?php
		$numeros[];
		for ($i=0; $i < 20; $i++) { 
			$numeros[$i] = rand(1,20);
		}
		$min = min($numeros);
		$max = max($numeros);
		echo($min."</br>");
		echo($max."</br>");
		
	?>
	</body>
</html>
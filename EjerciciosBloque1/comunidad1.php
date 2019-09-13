<html>
	<head>
		<title>1. Comunidad</title>
	</head>
	<body>
	<?php
		$pisos = rand(1,10);
		$puertas = 4;
		for($i = 1; $i <= $pisos; $i++){
			for($j = 1; $j <= $puertas; $j++){
				echo 'Piso '.$i.' puerta '.$j.'</br>';
			}
		}
	?>
	</body>
</html>
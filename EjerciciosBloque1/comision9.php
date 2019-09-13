<html>
	<head>
		<title>7. Cuadrados</title>
	</head>
	<body>
	<?php
		$num = rand(1,100);
		$i = 1;
		do{
			$cuadrado = pow($num,$i);
			echo 'El numero '.$num.' exponenciado '.$i.' = '.$cuadrado.'</br>';
			$i++;
		}while($cuadrado<100);
	?>
	</body>
</html>
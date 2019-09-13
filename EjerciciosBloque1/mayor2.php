<html>
	<head>
		<title>1. Comunidad</title>
	</head>
	<body>
	<?php
		$num1 = rand(1,10);
		$num2 = rand(1,10);
		$num3 = rand(1,10);
		$max = 0;
		echo 'El numero 1 es: '.$num1.'</br>';
		echo 'El numero 2 es: '.$num2.'</br>';
		echo 'El numero 3 es: '.$num3.'</br>';
		if($max<$num1)
			$max = $num1;
		if($max<$num2)
			$max = $num2;
		if($max<$num3)
			$max = $num3;
		
		echo 'El numero mayor es: '.$max;
	?>
	</body>
</html>
<html>
	<head>
		<title>7. Cuadrados</title>
	</head>
	<body>
	<?php
		$ventas= 15000;
		$comision = 0;
		if($ventas < 10000){
			$comision = 5;
		}elseif($ventas >= 10000 && $ventas < 20000){
			$comision = 8;
		}elseif ($ventas >=20000 && $ventas < 40000) {
			$comision = 10;
		}elseif ($ventas >= 40000) {
			$comision = 13;
		}
		echo $res = ($ventas*($comision/100);
	?>
	</body>
</html>
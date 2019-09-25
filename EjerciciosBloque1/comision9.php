<html>
	<head>
		<title>9. Comision</title>
	</head>
	<body>
	<?php
		$ventas = 50000;
		switch ($ventas) {
			case $ventas<10000:
				$comision = 5;
				$res = ($ventas*($comision/100));
				echo $res;
				break;

			case $ventas>=10000 && $ventas<20000:
				$comision = 8;
				$res = ($ventas*($comision/100));
				echo $res;
				break;
			case $ventas>=20000 && $ventas<40000:
				$comision = 10;
				$res = ($ventas*($comision/100));
				echo $res;
				break;
			case $ventas>=40000:
				$comision = 13;
				$res = ($ventas*($comision/100));
				echo $res;
				break;
			default:
				echo "Introduce un valor";# code...""
				break;
		}
	?>
	</body>
</html>
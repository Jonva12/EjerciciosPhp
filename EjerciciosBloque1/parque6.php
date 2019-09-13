<html>
	<head>
		<title>6. Atraccion</title>
	</head>
	<body>
	<?php
		$edad = rand(1,100);
		echo 'Tiene '.$edad.' años. </br>';
		$altura = rand(100,200);
		echo 'Mide '.$altura.'cm. </br>';
		$acompañado = "True";
		if($edad < 6){
			echo 'No puede subir a la atraccion.';
		}elseif ($edad >= 6 && $acompañado === "True") {
			echo 'Puede subir a la atraccion.';
		}elseif ($edad >= 10 || $altura >= 120 && $acompañado === "True") {
			echo 'Puede subir a la atraccion.';
		}else{
			echo 'No puede subir a la atraccion.';
		}
		
	?>
	</body>
</html>
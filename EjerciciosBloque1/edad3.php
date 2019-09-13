<html>
	<head>
		<title>3. Edad</title>
	</head>
	<body>
	<?php
		$edad = rand(1,100);
		echo 'Tiene '.$edad.'años </br>';
		switch ($edad) {
			case $edad>0 && $edad <11:
				echo 'Esta entre los 0  y 10 años.';
				break;

			case $edad>10 && $edad <21:
				echo 'Esta entre los 10  y 20 años.';
				break;

			case $edad>20 && $edad <31:
				echo 'Esta entre los 20  y 30 años.';
				break;

			case $edad>30 && $edad <41:
				echo 'Esta entre los 30  y 40 años.';
				break;

			case $edad>40 && $edad <51:
				echo 'Esta entre los 40  y 50 años.';
				break;

			case $edad>50 && $edad <61:
				echo 'Esta entre los 50  y 60 años.';
				break;

			case $edad>60 && $edad <71:
				echo 'Esta entre los 60  y 70 años.';
				break;

			case $edad>70 && $edad <81:
				echo 'Esta entre los 70  y 80 años.';
				break;

			case $edad>80 && $edad <91:
				echo 'Esta entre los 80  y 90 años.';
				break;

			case $edad>90 && $edad <101:
				echo 'Esta entre los 90  y 100 años.';
				break;
			default:
				echo 'Tienes que dar una edad valida.';
				break;
		}
	?>
	</body>
</html>
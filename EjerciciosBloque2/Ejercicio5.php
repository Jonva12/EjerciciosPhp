<html>
	<head>
		<title>5. Ejercicio</title>
	</head>
	<body>
	<?php
		$meses = array(
			"Enero" => cal_days_in_month(CAL_GREGORIAN, 1, 2020),
			"Febrero" => cal_days_in_month(CAL_GREGORIAN, 2, 2020),
			"Marzo" => cal_days_in_month(CAL_GREGORIAN, 3, 2020),
			"Abril" => cal_days_in_month(CAL_GREGORIAN, 4, 2020),
			"Mayo" => cal_days_in_month(CAL_GREGORIAN, 5, 2020),
			"Junio" => cal_days_in_month(CAL_GREGORIAN, 6, 2020),
			"Julio" => cal_days_in_month(CAL_GREGORIAN, 7, 2020),
			"Agosto" => cal_days_in_month(CAL_GREGORIAN, 8, 2020),
			"Septiembre" => cal_days_in_month(CAL_GREGORIAN, 9, 2020),
			"Octubre" => cal_days_in_month(CAL_GREGORIAN, 10, 2020),
			"Noviembre" => cal_days_in_month(CAL_GREGORIAN, 11, 2020),
			"Diciembre" => cal_days_in_month(CAL_GREGORIAN, 12, 2020),
		);

		echo "<table>";
		foreach ($meses as $mes => $dias) {
			echo("<tr>");
				echo("<td>".$mes."</td>");
			echo("</tr>");
		}
		echo "</table>";
	?>
	</body>
</html>
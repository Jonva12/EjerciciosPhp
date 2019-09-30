<html>
	<head>
		<title>2. Tabla</title>
	</head>
	<body>
	<?php
		$columnas=5;
		$filas=1;

		function crearTabla($filas, $columnas){
			echo "<table>";
			for($i=1;$i<=$filas; $i++){
				echo "<tr>";
					for ($j=1; $j <=$columnas ; $j++) { 
						echo "<td>Columna</td>";
					}
				echo "</tr>";
			}
			echo "</table>";
		}
		crearTabla($filas,$columnas);
		
	?>
	</body>
</html>
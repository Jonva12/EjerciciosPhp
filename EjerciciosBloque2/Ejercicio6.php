<html>
	<head>
		<title>6. Ejercicio</title>
	</head>
	<body>
    <form action="" method="get">
		Nombre: <input type="string" name="nombre">
		Mes: <input type="string" name="mes">
		<input type="submit" value="Añadir">
	</form>
    <br>
	<?php
    	$meses = [
            "Enero" => ["Paco"],
            "Febrero" => ["Aitor"],
            "Marzo" => ["Maider"],
            "Abril" => ["Julen"],
            "Mayo" => ["Jon"],
            "Junio" => ["Mireia"],
            "Julio" => ["Sandra"],
            "Agosto" => ["Ane"],
            "Septiembre" => ["Patxi"],
            "Octubre" => ["Maria"],
            "Noviembre" => ["Miren"],
            "Diciembre" => ["Xabi"],
        ];

        $meses = cumpleNuevo($_GET['nombre'], $_GET['mes'], $meses);

        foreach ($meses as $mes => $nombres) {
            echo "<ul><font style='color: blue'>$mes</font>";
            foreach ($nombres as $nombre) {
                echo "<li>$nombre</li>";
            }
            echo '</ul>';
        }	


        function cumpleNuevo($nombre, $mes, $meses){
            array_push($meses[$mes], $nombre);
            //calculo la cantidad de nombres en total de ese mes incluyendo el recien añadido.
            echo("Hay un total de ".count($meses[$mes], $nombres)." nombres en el mes seleccionado</br>");
            return $meses;	
        }
	?>
	</body>
</html>
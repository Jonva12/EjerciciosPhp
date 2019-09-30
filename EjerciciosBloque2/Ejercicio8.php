<html>
	<head>
		<title>8. Ejercicio</title>
	</head>
	<body>
       <?php
        function existe($nombre){
            if(file_exists($nombre)){
                echo("El archivo existe");
            }else{
                throw new exception('El archivo no ha sido encontrado');
            }
        }
        //Llamada a la funcion
        try {
            existe("config.php");
        } catch (Exception $e) {
            echo 'Ha habido una excepción: ' . $e->getMessage() . "<br>";
        }
        ?>
	</body>
</html>
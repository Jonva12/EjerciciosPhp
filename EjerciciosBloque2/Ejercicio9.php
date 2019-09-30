<html>
	<head>
		<title>9. Ejercicio</title>
	</head>
	<body>
       <?php
            $nums = array(3, -6, 4, 2, 10);

            function areaCuadrado($lado){
                if ($lado < 0){
                    // Lanzamos una excepción
                    throw new Exception ('Debes insertar un número positivo');
                } else {
                    return $lado * $lado;
                }
            }
            // Creamos un loop para calcular el área de cada cuadrado
                foreach ($nums as $lado){
                    try {
                        echo "El área del cuadrado es: " . areaCuadrado($lado) . "<br>";
                    } catch (Exception $e) {
                        echo 'Ha habido una excepción: ' . $e->getMessage() . "<br>";
                    }
                }
       ?>
	</body>
</html>
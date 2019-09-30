<html>
	<head>
		<title>7. Ejercicio</title>
	</head>
	<body>
       <?php
            $base = rand(1,100);
            $exponencial = 3;
            echo ("La base es: ".$base."</br>");
            //le añado un valor default a la expo por si el usuario no da el parametro.
            function calcPoten($base, $expo = 2){
                $res = pow($base, $expo);
                echo $res;
            }

            calcPoten($base, $exponencial);
        ?>
	</body>
</html>
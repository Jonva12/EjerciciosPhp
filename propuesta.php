<html>
	<head>
		<title>7. Ejercicio</title>
	</head>
	<body>
        <form action="" method="GET">
            Cateto 1:<input type="number" name="Cateto1">
            Cateto 2:<input type="number" name="Cateto2">
            <input type="submit" name="" value="Calcular">
        </form>
       <?php
            $calcular = calcHipotenusa($_GET['Cateto1'], $_GET['Cateto2']);
            function calcHipotenusa($cateto1, $cateto2){
                $hipotenusa = (pow($cateto1,2)+pow($cateto2, 2));
                echo("<div>".$hipotenusa."</div");

            }
        ?>
	</body>
</html>
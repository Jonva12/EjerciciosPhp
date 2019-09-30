<html>
	<head>
		<title>Calcular Hipotenusa</title>
	</head>
	<body>
        <h4>Calcula la hipotenusa en base a los dos catetos introducidos en los siguientes campos, teniendo en cuenta que es un triangulo rectangulo:</h4>
        <form action="" method="GET">
            Cateto 1:<input type="number" name="Cateto1">
            Cateto 2:<input type="number" name="Cateto2">
            <input type="submit" name="" value="Calcular">
        </form>
       <?php
            $calcular = calcHipotenusa($_GET['Cateto1'], $_GET['Cateto2']);
            function calcHipotenusa($cateto1, $cateto2){
                $hipotenusa = hypot($cateto1, $cateto2);
                echo("<div>La hipotenusa es: ".$hipotenusa."</div");

            }
        ?>
	</body>
</html>
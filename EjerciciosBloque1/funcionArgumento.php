<html>
	<head>
		<title>Funcion Argumento</title>
	</head>
	<body>
	<?php
		$num1 = 5;
		$num2 = 2;

		function sumar($n1, $n2){
			$res = ($n1+$n2);
			echo($res);
		}
		function restar($n1, $n2){
			$res = ($n1-$n2);
			echo($res);
		}
		function mult($n1, $n2){
			$res = ($n1*$n2);
			echo($res);
		}
		function div($n1, $n2){
			$res = ($n1/$n2);
			echo($res);
		}

		function calcular($func, $n1, $n2){
			echo($func($n1,$n2));
		}

		calcular(restar,$num1,$num2);
	?>
	</body>
</html>
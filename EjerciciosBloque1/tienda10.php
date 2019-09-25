<html>
	<head>
		<title>9. Comision</title>
	</head>
	<body>
	<?php
		$total_compra = rand(1,150);
		$totalCompra = floatval($total_compra);
		echo "Precio Original: ".$totalCompra."</br>";
		$tipo_compra="ropa";
		$iva;
		if($tipo_compra === "mascotas"){
			$iva = 10;
		}elseif($tipo_compra === "ropa"){
			$iva = 21;
		}
		switch ($total_compra) {
			case $total_compra<19:
				if($tipo_compra === "mascotas"){
					echo "No se puede realizar el envio.</br>";
				}elseif($tipo_compra === "ropa"){
					echo "los gastos de envio son 9€.</br>";
					$total_compra+=9;
				}
				break;

			case $total_compra>=19 && $total_compra<40:
				echo "los gastos de envio son 9€.</br>";
				$total_compra+=9;
				break;
			case $total_compra>=80:
				echo "los gastos de envio son gratis.</br>";
				echo $res;
				break;
			default:
				echo "No hay gastos de envio añadidos.</br>";
				break;
		}
		$precioFinal = $totalCompra+($totalCompra*($iva/100));
		echo $precioFinal."€ es el precio final.";
	?>
	</body>
</html>
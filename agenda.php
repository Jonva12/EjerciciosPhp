<?php
session_start();
?>
<html>
	<head>
		<title>Agenda PHP</title>
	</head>
	<body>
		<form action="" method="GET">
			Nombre:<input type="text" name="nombre">
			Email:<input type="text" name="email">
			<input type="submit" name="añadir" value="Añadir">
		</form>
		<p id="informacion">Aqui va la info</p>
	<?php
		$_SESSION["nombre"] = array();
		$_SESSION["email"] = array();

		if (array_key_exists(strtolower($_GET['nombre']), $_SESSION["nombre"])) {
			echo "Nombre ya existente, introduce otro nombre.";
		}else{
			array_push($_SESSION["nombre"], strtolower($_GET['nombre']));
		}

		foreach ($_SESSION["nombre"] as $nombre) {
			echo "<p>".$nombre."</p>";
		}



	?>
	</body>
</html>
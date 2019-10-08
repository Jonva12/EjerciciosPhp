<?php
	session_start(); //Iniciamos o Continuamos la sesion
?>
<!doctype html>
<html>
	<head>
		<title>
			DWES02 - Index Agenda
		</title>
	</head>
	<body>
		<?php
			if (isset($_POST['usuario'])){ //Si llego un Nickname via el formulario lo grabamos en la Sesion
				$_SESSION['user'] = $_POST['usuario']; //Nickname Grabado
			}if ($_SESSION['user']){ //Si hay un nickname en la sesion actual, creamos una variable que será mostrada
				$prueba= $_SESSION['user'];
				echo($prueba);
				header("Status: 301 Moved Permanently");
				header("Location: http://localhost/EjerciciosPhp/agenda.php");
			}
		?>
		<form action="" method="post">
			Nombre:<br>
			<input type="text" name="usuario"><br><br>
			<button type="submit" name="submit" >Ver Agenda</button>
		</form>
	</body>
</html>
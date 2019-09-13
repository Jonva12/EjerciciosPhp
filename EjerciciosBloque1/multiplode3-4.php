<html>
	<head>
		<title>4. Multiplo de 3</title>
	</head>
	<body>
	<?php
		$num = rand(1,100);
		if($num%3==0){
			echo 'El numero '.$num.' es multiplo de 3.';
		}else{
			echo 'El numero '.$num.' no es multiplo de 3.';
		}
		
	?>
	</body>
</html>
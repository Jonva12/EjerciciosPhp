<html>
	<head>
		<title>5. Palindromo</title>
	</head>
	<body>
	<?php
		$cadena = "Somos o no somos";
		function palindromo($cadena){
    		$separar = explode(" ", strtolower($cadena));
    
    		foreach($separar as $palabra){
        		trim($palabra);
        		$nuevo .= $palabra; 
   			}
    
		    if($nuevo == strrev($nuevo)){
		        echo 'La frase '.$cadena.' es palindroma.';
		    }else{
		        echo 'La frase '.$cadena.' no es palindroma.';
		    }
		} 
		palindromo($cadena);
	?>
	</body>
</html>
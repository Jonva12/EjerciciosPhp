<html>
	<head>
		<title>5. Palindromo</title>
	</head>
	<body>
	<?php
		$cadena = "Somos o no somos";
		function palindromo($cadena){
			//separa las palabras
    		$separar = explode(" ", strtolower($cadena));
    
    		foreach($separar as $palabra){
    			//quita los espacion en blanco
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
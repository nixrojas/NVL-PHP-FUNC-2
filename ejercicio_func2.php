<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	




$longitud=[];
	

	
	function cuentaLetra($valor1, $valor2){
		global $longitud;
		cuentaLetraBucle($valor1);
		cuentaLetraBucle($valor2);
		echo "existen segun nixon ". count ( $longitud) ." letras u ";
	};

	function cuentaLetraBucle($valor){
		for ($i=0; $i < strlen($valor) ; $i++) {
		 	global $longitud;
			if (strstr($valor[$i], "u")) {
				array_push($longitud,1);
			}
		}
	}
	
	
	cuentaLetra("Upgrade Hub", 'u');


	
?>

</body>
</html>
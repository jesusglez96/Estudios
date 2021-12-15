<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			include_once 'Funciones/matematicas.php';
			for ($i=siguientePrimo(0); $i < 1000; $i=siguientePrimo($i)) { 
				echo "$i, ";
			}
		?>
	</body>
</html>
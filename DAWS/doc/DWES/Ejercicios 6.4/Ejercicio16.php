<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			include_once 'Funciones/matematicas.php';
			for ($i=1; $i <= 99999; $i++) { 
				if (esCapicua($i)) {
					echo "$i, ";
				}
			}
		?>
	</body>
</html>
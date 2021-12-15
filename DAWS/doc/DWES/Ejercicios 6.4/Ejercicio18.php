<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			include_once 'Funciones/matematicas.php';
			$decimal=156;
			$binario="";
			echo "$decimal<sub>(10</sub> = ";
			do {
				$binario=($decimal%2).$binario;
				$decimal=(int)$decimal/2;
			} while ($decimal >= 1);
			echo "$binario<sub>(2</sub>";
		?>
	</body>
</html>
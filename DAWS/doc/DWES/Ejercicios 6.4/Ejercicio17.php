<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			include_once 'Funciones/matematicas.php';
			$binario=1101001101;
			$decimal=0;
			echo "$binario<sub>(2</sub> = ";
			$binario=voltea($binario);
			do {
				$decimal=$decimal*2+($binario%10);
				$binario=(int)$binario/10;
			} while ($binario >= 1);
			echo "$decimal<sub>(10</sub>";
		?>
	</body>
</html>
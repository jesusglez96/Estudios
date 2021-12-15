<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<style type="text/css">
			table, tr, td {
				border-collapse: collapse;
				border: blue 2px solid;
			}
		</style>
	</head>
	<body>
		<?php
			include_once 'Funciones/matematicas.php';
			include_once 'Ejercicios20-28.php';
			include_once 'Ejercicios29-34.php';

			
			do {
				$numerosBi=generaArrayBiInt(10,10,10,99);
			} while (!esPuntoDeSilla($numerosBi, 4, 4));
			echo "<table>";
			foreach ($numerosBi as $fila) {
				echo "<tr>";
				foreach ($fila as $num) {
					echo "<td>$num</td>";
				}
				echo "</tr>";
			}
			echo "</table>";

			echo "<br>Cuarta fila de la matriz:<br>";
			$fila=filaDeArrayBiInt($numerosBi, 4);
			echo "<table>";
			foreach ($fila as $num) {
				echo "<td>$num</td>";
			}
			echo "</tr></table>";
			echo "Tercra columna de la matriz:<br>";
			$columna=columnaDeArrayBiInt($numerosBi, 3);
			echo "<table><tr>";
			foreach ($columna as $num) {
				echo "<td>$num</td>";
			}
			echo "</tr></table>";

			echo "<br><br>El numero 65 se encuentra en las coordenadas: ";
			$coordenadas=coordenadasEnArrayBiInt($numerosBi, 65);
			echo $coordenadas[0], "-", $coordenadas[1];
			//echo "<br>El numero situado en la posicion 4-4  es: ", $numerosBi[4][4];
			echo "<br>El numero situado en la posicion 4-4 ";
			if (esPuntoDeSilla($numerosBi, 4, 4)) {
				echo "es punto de silla";
			} else {
				echo "NO es punto de silla";
			}

			echo "<br><br>Diagonal 'nose' que pasa por la posicion 4-6:<br>";
			$diagonal=diagonal($numerosBi, 4, 6, "nose");
			echo "<table><tr>";
			foreach ($diagonal as $num) {
				echo "<td>$num</td>";
			}
			echo "</tr></table>";
			echo "Diagonal 'neso' que pasa por la posicion 4-6:<br>";
			$diagonal=diagonal($numerosBi, 4, 6, "neso");
			echo "<table><tr>";
			foreach ($diagonal as $num) {
				echo "<td>$num</td>";
			}
			echo "</tr></table>";



			/*
			//Prueba todas las funciones array 1 dimension (Ejercicios20-28)
			$numeros=generaArrayInt(20, 10, 99);
			echo "<table><tr>";
			foreach ($numeros as $num) {
				echo "<td>$num</td>";
			}
			echo "</tr></table>";

			echo "<br><br>Minimo: ", minimoArrayInt($numeros);
			echo "<br>Máximo: ", maximoArrayInt($numeros);
			echo "<br>Média: ", mediaArrayInt($numeros);

			echo "<br><br>El número 32 está en el array: ";
			if (estaEnArrayInt($numeros, 32)) {
				echo "Si";
			} else {
				echo "No";
			}
			echo "<br>El número 32 está en la posición: ", posicionEnArray($numeros, 32);

			echo "<br><br>Array volteado:<br>";
			$numeros=volteaArrayInt($numeros);
			echo "<table><tr>";
			foreach ($numeros as $num) {
				echo "<td>$num</td>";
			}
			echo "</tr></table>";
			echo "Array rotado hacia la derecha 2 posiciones:";
			$numeros=rotaDerechaArrayInt($numeros, 2);
			echo "<table><tr>";
			foreach ($numeros as $num) {
				echo "<td>$num</td>";
			}
			echo "</tr></table>";
			echo "Array rotado hacia la izquierda 2 posiciones:";
			$numeros=rotaIzquierdaArrayInt($numeros, 2);
			echo "<table><tr>";
			foreach ($numeros as $num) {
				echo "<td>$num</td>";
			}
			echo "</tr></table>";
			*/
		?>
	</body>
</html>
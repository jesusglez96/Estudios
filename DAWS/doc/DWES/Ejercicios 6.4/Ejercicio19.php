<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<form action="#" method="post">
			Numero a convertir: <input type="number" name="num" autofocus required><br>
			Base del numero introducido: 
			<select id="so" name="baseInicial" required>
				<option value="" selected="selected">- selecciona -</option>
				<option value="10">Decimal</option>
				<option value="2">Binario</option>
			</select><br>
			Base a la que va a convertir:
			<select id="so" name="baseAConvertir" required>
				<option value="" selected="selected">- selecciona -</option>
				<option value="10">Decimal</option>
				<option value="2">Binario</option>
			</select><br>
			<input  type="hidden" name="concatenado" value="<?php echo $concatenado ?>">
			<input type="submit" value="Enviar">
		</form>
		<?php
			if (isset($_POST['baseInicial']) && isset($_POST['baseAConvertir']) && isset($_POST['num'])) {
				include_once 'Funciones/matematicas.php';
				$baseIni=$_POST['baseInicial'];
				$baseConver=$_POST['baseAConvertir'];
				$numero=$_POST['num'];
				$conversion=0;
				if ($baseIni==$baseConver) {
					$conversion=$numero;
				} elseif ($baseIni==10 && $baseConver==2) {
					$conversion=decimalBinario($numero);
				} elseif ($baseIni==2 && $baseConver==10) {
					$conversion=binarioDecimal($numero);
				}
				echo "$numero<sub>($baseIni</sub> = $conversion<sub>($baseConver</sub>";
			}
		?>



		<?php //FUNCIONES
			function decimalBinario ($dec) {
				$bin="";
				do {
					$bin=($dec%2).$bin;
					$dec=(int)$dec/2;
				} while ($dec >= 1);
				return (int)$bin;
			}
			function binarioDecimal ($bin) {
				$dec=0;
				$bin=voltea($bin);
				do {
					$dec=$dec*2+($bin%10);
					$bin=(int)$bin/10;
				} while ($bin >= 1);
				return $dec;
			}
		 ?>
	</body>
</html>

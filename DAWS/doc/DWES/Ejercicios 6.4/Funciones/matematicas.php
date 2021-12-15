<?php 
	//Funciones matematicas para Ejercicios Tema 6 1-14
	function esCapicua ($n) {
		if ($n==voltea($n)) {
			return true;
		} else {
			return false;
		}
	}

	function esPrimo ($n) {
		if ($n!=0 || $n!=1) {
			for ($i=2; $i<=$n/2; $i++) { 
				if ($n%$i==0) {
					return false;
				}
			}
			return true;
		} else {
			return false;
		}
	}

	function siguientePrimo ($n) {
		do {
			$n++;
		} while (!esPrimo($n));
		return $n;
	}

	function potencia ($base, $exponente) {
		$devuelto = 1;
		for ($i=0; $i < $exponente; $i++) { 
			$devuelto = $devuelto*$base;
		}
		return $devuelto;
	}

	function digitos ($n) {
		$dig = 0;
		do {
			$dig++;
			$n=$n/10;
		} while ($n >= 1);
		return $dig;
	}

	function voltea ($n) {
		$volteado="";
		do {
		 	$volteado=$volteado.($n%10);
			$n=$n/10;
		 } while ($n >= 1);
		return $volteado;
	}

	function digitoN ($numero, $posicion) {
		return (voltea($numero)/(potencia(10,$posicion)))%10;
	}

	function posicionDeDigito ($numero, $ocurrencia) {
		$numero=voltea($numero);
		$posicion=1;
		do {
			if ($numero%10==$ocurrencia) {
				return $posicion;
			}
			$posicion++;
			$numero=(int)$numero/10;
		} while ($numero >= 1);
		return -1;
	}

	function quitaPorDetras ($numero, $n) {
		return (int)($numero/potencia(10,$n));
	}

	function quitaPorDelante ($numero, $n) {
		$numero=voltea($numero);
		$numero=(int)($numero/potencia(10,$n));
		$numero=voltea($numero);
		return $numero;
	}

	function pegaPorDetras ($numero, $digito) {
		return ($numero*10)+$digito;
	}

	function pegaPorDelante ($numero, $digito) {
		$numero=voltea($numero);
		$numero=pegaPorDetras($numero, $digito);
		$numero=voltea($numero);
		return $numero;
	}

	function trozoDeNumero ($numero, $inicio, $final) {
		if ($inicio>$final || $final>digitos($numero)) {
			return -1;
		} else {
			$numero=(int)($numero/(potencia(10,digitos($numero)-$final)));
			$numero=$numero%(potencia(10,($final-$inicio)+1));
			return $numero;
		}
	}

	function juntaNumeros ($n1, $n2) {
		$n1 = $n1.$n2;
		return $n1;
	}

 ?>
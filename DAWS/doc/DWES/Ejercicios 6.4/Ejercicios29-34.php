<?php 
	function generaArrayBiInt ($n, $m, $min, $max) {
		for ($i=0; $i < $n; $i++) { 
			for ($j=0; $j < $m; $j++) { 
				$array[$i][$j]=rand($min, $max);
			}
		}
		return $array;
	}

	function filaDeArrayBiInt ($array, $fila) {
		return $array[$fila];
	}

	function columnaDeArrayBiInt ($array, $columna) {
		foreach ($array as $fila) {
			$devuelto[]=$fila[$columna];
		}
		return $devuelto;
	}

	function coordenadasEnArrayBiInt ($array, $coincidencia) {
		foreach ($array as $posF => $fila) {
			foreach ($fila as $posC => $num) {
				if ($num==$coincidencia) {
					return array($posF, $posC);
				}
			}
		}
		return array(-1, -1);
	}

	function esPuntoDeSilla ($array, $fila, $columna) {
		$num=$array[$fila][$columna];
		for ($i=0; $i < count($array[0]); $i++) { 
			if ($array[$fila][$i]<$num) {
				return false;
			}
		}
		for ($i=0; $i < count($array); $i++) { 
			if ($array[$i][$columna]>$num) {
				return false;
			}
		}
		return true;
	}

	function diagonal ($array, $fila, $columna, $direccion) {
		if ($direccion=="nose") {
			while ($fila > 0 && $columna > 0) {
				$fila--;
				$columna--;
			}
			do {
				$diagonal[]=$array[$fila][$columna];
				$fila++;
				$columna++;
			} while ($fila < count($array) && $columna < count($array[0]));
			return $diagonal;
		} elseif ($direccion=="neso") {
			while ($fila > 0 && $columna < (count($array)-1)) {
				$fila--;
				$columna++;
			}
			do {
				$diagonal[]=$array[$fila][$columna];
				$fila++;
				$columna--;
			} while ($fila < count($array) && $columna > 0);
			return $diagonal;
		} else {
			return array(-1);
		}
	}
 ?>
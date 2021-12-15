<?php 
	function generaArrayInt ($tamanio, $min, $max) {
		for ($i=0; $i < $tamanio; $i++) { 
			$array[$i]=rand($min, $max);
		}
		return $array;
	}

	function minimoArrayInt ($array) {
		$min=INF;
		foreach ($array as $num) {
			if ($num<$min) {
				$min=$num;
			}
		}
		return $min;
	}

	function maximoArrayInt ($array) {
		$max=-INF;
		foreach ($array as $num) {
			if ($num>$max) {
				$max=$num;
			}
		}
		return $max;
	}

	function mediaArrayInt ($array) {
		$sum=0;
		$pos=0;
		foreach ($array as $num) {
			$sum+=$num;
			$pos++;
		}
		return ($sum/$pos);
	}

	function estaEnArrayInt ($array, $coincidencia) {
		foreach ($array as $num) {
			if ($num==$coincidencia) {
				return true;
			}
		}
		return false;
	}

	function posicionEnArray ($array, $coincidencia) {
		foreach ($array as $posicion => $num) {
			if ($num==$coincidencia) {
				return $posicion;
			}
		}
		return -1;
	}

	function volteaArrayInt ($array) {
		for ($i=0; $i < count($array)/2; $i++) { 
			$aux=$array[$i];
			$array[$i]=$array[(count($array)-1)-$i];
			$array[(count($array)-1)-$i]=$aux;
		}
		return $array;
	}

	function rotaDerechaArrayInt ($array, $rotaciones) {
		for ($r=0; $r < $rotaciones; $r++) { 
			$aux=$array[count($array)-1];
			for ($i=count($array)-1; $i > 0; $i--) { 
				$array[$i]=$array[$i-1];
			}
			$array[0]=$aux;
		}
		return $array;
	}

	function rotaIzquierdaArrayInt ($array, $rotaciones) {
		for ($r=0; $r < $rotaciones; $r++) { 
			$aux=$array[0];
			for ($i=0; $i < count($array)-1; $i++) { 
				$array[$i]=$array[$i+1];
			}
			$array[count($array)-1]=$aux;
		}
		return $array;
	}
 ?>
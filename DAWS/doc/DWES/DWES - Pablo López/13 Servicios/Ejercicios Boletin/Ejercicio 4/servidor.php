<?php 


$codeError = 0;
$errorMsg = "Cartas generadas correctamente";

if(isset($_GET['c'])) {

    $count = $_GET['c'];

    if($count < 0 || $count > 40) {
        $codeError = 2;
        $errorMsg = "Debes introducir un número mayor que 0 y menor que 40.";

        $resp = [
            "cartas" => "",
            "error" => $codeError,
            "errorMsg" => $errorMsg
        ];
    } else {
        $palos = ["Oros", "Copas", "Espadas", "Bastos"];
        $numero = [1,2,3,4,5,6,7,10,11,12];
        $cartas = [];

        for ($i=0; $i<$count; $i++) { 
            
            $carta = null;

            do {
                $sacarPalo = rand(0, (count($palos)-1));
                $sacarNumero = rand(0, (count($numero)-1));
                $carta = $numero[$sacarNumero]." de ".$palos[$sacarPalo];
            } while (in_array($carta, $cartas));

            $cartas[] = $carta;
        }

        $resp = ["cartas" => $cartas, "error" => $codeError, "errorMsg" => $errorMsg];

    }
}

echo json_encode($resp);

?>
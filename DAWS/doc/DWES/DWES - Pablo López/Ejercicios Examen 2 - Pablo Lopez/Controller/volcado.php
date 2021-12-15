<?php 
    session_start();
    require_once '../Model/Socio.php';
    if(isset($_POST["cant"])) {
        $pos = 1;
        $socios = Socio::getSociosCantidad($_POST["cant"]);
        $file = fopen("fansRosalia.txt", "w+");
            foreach ($socios as $socio) {
                $cadena = "Posicion: ".$pos." ,Nombre: ".$socio->getNombre()." ,Puntos: ".$socio->getPuntos();
            fwrite($file, $cadena . PHP_EOL);
            $pos++;
            }
            fclose($file);  
    }
    header("Location: index.php");

?>
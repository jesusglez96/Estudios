<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - T6 Funciones</title>
</head>
<body>
    <?php 
        include "controlAcceso.php";

        if(isset($_REQUEST["usuario"])){
            $usuario = $_GET["usuario"];
            $usuario = strtolower($usuario);
            $fila = $_GET["fila"]-1;
            $columna = $_GET["columna"];
            $columna = strtoupper($columna);
            $valor = $_GET["valor"];

            $tarjetaUsuario = dameTarjeta($usuario);

            if(compruebaClave($tarjetaUsuario,$fila,$columna,$valor)==true){
                echo "<h1>Acceso permitido</h1>";
                echo "<a href='https://ciclos.iesruizgijon.es/'>Página protegida</a>";
            } else {
                echo "<h1>Acceso denegado</h1>";
                echo "Intentalo de nuevo pinchando <a href='ejercicio2-1.php'>AQUI</a>";
            }
    }


    ?>
</body>
</html>
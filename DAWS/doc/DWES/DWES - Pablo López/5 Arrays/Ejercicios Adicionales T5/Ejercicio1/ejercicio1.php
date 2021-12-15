<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Diseñar una página que esté compuesta por una tabla de 10 filas por 10 columnas, y en
cada celda habrá una imagen de un ojo cerrado. Cada vez que el usuario pulse un ojo,
ser recargará la página con todos los ojos cerrados salvo los que se han ido pulsando
que corresponderá a un ojo abierto. Conforme se vallan pulsando más ojos se irá
completando la tabla de ojos abiertos. Si se pulsa en un ojo abierto se volverá a cerrar.
Usar la función explode() para pasar arrays como cadenas.
-->
        <h1>Pulsa uno de los ojos para abrirlo</h1>
        <table border=1 cellspacing=0 cellpadding=0>
            <?php
                if(isset($_REQUEST["num"])){
                    $num = $_REQUEST["num"];
                    $nTexto = $_REQUEST["nTexto"];
                } else {
                    $num = 0;
                    $nTexto = "";
                }

                if(isset($_REQUEST["num"])){
                    $nTexto = $nTexto . " " . $num;
                    $numSeleccionados = [];
                    while ($nTexto[0]==" "){
                        $nTexto = substr($nTexto, 1);
                    } 
                    $numSeleccionados =  explode(" ", $nTexto);

                    $cont = 0;
                    for ($i = 0; $i<count($numSeleccionados); $i++){
                        if ($num == $numSeleccionados[$i]){
                            $cont++;
                        }
                    }

                    if ($cont>=2){
                        $numSeleccionados = array_diff($numSeleccionados, array($num));
                        $nTexto = str_replace($num, "", $nTexto);
                    }

                    $aux = 1;
                   
                    for ($i = 0; $i <10; $i++){
                        echo "<tr>";
                        for ($f = 0; $f<10; $f++){
                            $existe = false;
                            foreach ($numSeleccionados as $numero){
                                if ($aux == $numero){
                                    $existe=true;
                                }
                            }
                        if ($existe){
                            echo "<td><a href='ejercicio1.php?num=$aux&nTexto=$nTexto'><img src='2.jpg' height='70px' width='100px'></a></td>";
                        } else {
                            echo "<td><a href='ejercicio1.php?num=$aux&nTexto=$nTexto'><img src='1.jpg' height='70px' width='100px'></a></td>";
                        }
                        $aux++;
                        }
                        echo "</tr>";
                    }
                } else {
                    $aux = 1;
                    for ($i = 0; $i <10; $i++){
                        echo "<tr>";
                        for ($f = 0; $f<10; $f++){{
                            echo "<td><a href='ejercicio1.php?num=$aux&nTexto=$nTexto'><img src='1.jpg' height='70px' width='100px'></a></td>";
                        }
                        $aux++;
                        }
                        echo "</tr>";
                    }
                    
                }


                
            ?>
        </table>
    
</body>
</html>
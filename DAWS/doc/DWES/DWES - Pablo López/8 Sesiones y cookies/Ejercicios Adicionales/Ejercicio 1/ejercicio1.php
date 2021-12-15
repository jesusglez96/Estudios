<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
<!-- Crear una página principal con un botón 'Añadir color' para generar un color aleatorio 
que además se establecerá como color de fondo de la página, cada vez que se pulsa irá generando 
un color nuevo (actualizando el fondo), que se irán almacenando en un array de sesión. 
Habrá un segundo botón 'Mostrar paleta creada' que dirige a una segunda página que mostrará 
una paleta con los colores generados. Esta paleta no es más que una tabla con un máximo de 5 
celdas por cada fila, y en cada celda se muestra un color de los generados. Debajo de la tabla 
tendremos 2 botones uno para volver a la página principal y seguir añadiendo colores a la paleta 
y otro para destruir la sesión y generar una paleta nueva.-->
    <?php 
        session_start();

        if(isset($_REQUEST["vaciar"])){
            session_destroy();
            header("location:ejercicio1.php");
        };

        if (!isset($_SESSION["cantColores"])){
            $_SESSION["cantColores"] = 0;
            $_SESSION["colores"] = array();
        };

        if (isset($_REQUEST["color"])){
            $_SESSION["cantColores"]++;
            $color = [(rand(0,255)),(rand(0,255)),(rand(0,255))];
            $prueba = 124;
            array_push($_SESSION["colores"], $color);
            ?>
            <style>body{background-color:rgb(<?php echo $color[0];?>,<?php echo $color[1];?>,<?php echo $color[2];?>);} </style>
            <?php
        };
            
        echo "Colores creados: ", $_SESSION["cantColores"];
    ?>
    
    <form action="#" method="POST">
        <br><input type="submit" name="color" value="Añadir color" >
    </form>
    <form action="paleta.php" method="POST">
        <br><input type="submit" name="paleta" value="Mostrar paleta creada">
    </form>

</body>
</html>
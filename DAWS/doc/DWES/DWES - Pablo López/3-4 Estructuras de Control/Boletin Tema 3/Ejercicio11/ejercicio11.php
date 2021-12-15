<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Escribe un programa que dada una hora determinada (horas y minutos), calcule los segundos que
faltan para llegar a la medianoche.-->

    <?php 
        $hora = $_GET["hora"];
        $minutos = $_GET["minutos"];

        $horasSegundos = $hora * 3600;
        $minutosSegundos = $minutos * 60;
        $segundosTotal = $horasSegundos + $minutosSegundos;

        echo "Faltan ", (86400-$segundosTotal), " segundos para medianoche.";


    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- Realiza un programa que calcule el tiempo que tardará en caer un objeto desde una altura h. Aplica
la fórmula t =√2h/g siendo g = 9.81m/s2-->

    <?php 
        $altura = $_GET["altura"];

        echo "El objeto tardará ", round(((2*$altura)/9.81),2, PHP_ROUND_HALF_UP), " segundos en caer."

    ?>
</body>
</html>
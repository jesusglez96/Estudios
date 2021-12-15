<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include_once "cubo.php";
        $cubo1 = new Cubo(20,11);
        $cubo2 = new Cubo(30,18);

        $cubo1->llenarCubo($cubo2);
        echo $cubo1->getContenido()."<br>";
        echo $cubo2->getContenido()."<br>";

        $cubo2->llenarCubo($cubo1);
        echo $cubo1->getContenido()."<br>";
        echo $cubo2->getContenido();
    ?>
</body>
</html>
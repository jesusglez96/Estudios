<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Escribe un programa que calcule el área de un rectángulo.-->
    <?php
        $altura = $_GET["altura"];
        $base = $_GET["base"];

        echo "El área del triángulo es ", ($base*$altura/2);
    ?>
</body>
</html>
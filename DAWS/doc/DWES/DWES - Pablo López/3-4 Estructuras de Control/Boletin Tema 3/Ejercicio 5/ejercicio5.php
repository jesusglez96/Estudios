<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0).-->
    <?php 
        $a = $_GET["a"];
        $b = $_GET["b"];

        if ($a==0){
            echo "La ecuación no tiene solución";
        } else {
            echo "x = ", (-$b / $a);
        }
    ?>

<br>
    <input type="button" onclick="history.back()" name="volver" value="Volver">
</body>
</html>
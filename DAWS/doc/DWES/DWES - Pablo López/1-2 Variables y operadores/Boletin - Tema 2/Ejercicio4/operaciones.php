<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado.-->
    
    <?php 
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];

        echo "La SUMA de ambos números es: ", ($num1+$num2),"<br>";
        echo "La RESTA de ambos números es: ", ($num1-$num2),"<br>";
        echo "La MULTIPLICACIÓN de ambos números es: ", ($num1*$num2),"<br>";
        echo "La DIVISIÓN de ambos números es: ", ($num1/$num2);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Diseñar un formulario web que pida la altura y el diámetro de un cilindro. Una vez el usuario
    introduzca los datos y pulse el botón calcular, deberá calcularse el volumen del cilindro y
    mostrarse el resultado en el navegador. Mostrar la imagen de un cilindro junto al resultado y
    un título "Calculo del volumen de un cilindro", intenta dar un aspecto agradable a la página de
    resultado. -->

    <h3>Cálculo del volumen de un cilindro</h3><br>
    <?php
        $altura = $_GET["altura"];
        $diametro = $_GET["diametro"];
        $radio = $diametro/2;

        $volumen = M_PI*($radio*$radio)*($altura);

        echo "El volumen del cilindro introducido es: ", round($volumen, 0, PHP_ROUND_HALF_UP), " cm3";

    ?>
    <br><br><img src="cilindro.png" height="250" width="250">
    
    


</body>
</html>
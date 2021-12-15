<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Tiempo estimado de llenado:</h3>
    
    <?php
        $altura = $_GET["altura"];
        $diametro = $_GET["diametro"];
        $radio = $diametro/2;
        $caudal = $_GET["caudal"];

        $volumen = 3.14*($radio*$radio)*($altura);
        $litros = $volumen*1000;

        $tiempo = $litros/$caudal;

        echo "El cilindro tardará ", round(($tiempo/60),0, PHP_ROUND_HALF_UP), " horas y ",($tiempo%60)," minutos en llenarse.<br><br>";

    ?>
    <img src="cilindro.png" height="250" width="250">
</body>
</html>
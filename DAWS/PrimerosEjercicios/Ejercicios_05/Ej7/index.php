<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-family: Arial;
        }
    </style>
</head>
<body>
<?php 
    $txt = "Una mañana, tras un sueño intranquilo, Gregorio Samsa se despertó convertido en un monstruoso insecto. Estaba echado de espaldas sobre un duro caparazón y, al alzar la cabeza, vio su vientre convexo y oscuro, surcado por curvadas callosidades, sobre el que casi no se aguantaba la colcha, que estaba a punto de escurrirse hasta el suelo. Numerosas patas, penosamente delgadas en comparación con el grosor normal de sus piernas, se agitaban sin concierto. - ¿Qué me ha ocurrido? No estaba soñando. Su habitación, una habitación normal, aunque muy pequeña, tenía el aspecto habitual. Sobre la mesa había desparramado un muestrario";
    echo "<p>$txt</p>";

    if (isset($_REQUEST["wrd"])) {
        $wrd = $_REQUEST["wrd"];

        echo (mb_stripos($txt, $wrd) != false) ? "La palabra se encuentra en el texto en la posición " . stripos($txt, $wrd) : "No se encuentra en el texto";
    }
?>
    <form action="index.php" method="post">
    <label for="wrd">Palabra: 
            <input type="text" name="wrd" id="wrd">
        </label>
        <button type="submit">Comprbar</button>
    </form>
</body>
</html>
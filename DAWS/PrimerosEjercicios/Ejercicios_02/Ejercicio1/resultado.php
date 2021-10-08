<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    if (isset($_REQUEST["num"])) {
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='2;URL=index.php'>";
    }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericio 1</title>
    <style>
        img {
            width: 80%;
            height: 75%;
        }
    </style>
</head>

<body>
    <?php
    if (!(isset($_GET['palabraIntroducida']))) {
        $numImagen = $_GET["num"];
    ?>
        <table>
            <tr>
                <td><img src="<?php echo ($numImagen == 1) ? "camaleon/camaleon_$numImagen.png" : "camaleon/negro.png" ?>"></td>
                <td><img src="<?php echo ($numImagen == 2) ? "camaleon/camaleon_$numImagen.png" : "camaleon/negro.png" ?>"></td>
                <td><img src="<?php echo ($numImagen == 3) ? "camaleon/camaleon_$numImagen.png" : "camaleon/negro.png" ?>"></td>
            </tr>
            <tr>
                <td><img src="<?php echo ($numImagen == 4) ? "camaleon/camaleon_$numImagen.png" : "camaleon/negro.png" ?>"></td>
                <td><img src="<?php echo ($numImagen == 5) ? "camaleon/camaleon_$numImagen.png" : "camaleon/negro.png" ?>"></td>
                <td><img src="<?php echo ($numImagen == 6) ? "camaleon/camaleon_$numImagen.png" : "camaleon/negro.png" ?>"></td>
            </tr>
            <tr>
                <td><img src="<?php echo ($numImagen == 7) ? "camaleon/camaleon_$numImagen.png" : "camaleon/negro.png" ?>"></td>
                <td><img src="<?php echo ($numImagen == 8) ? "camaleon/camaleon_$numImagen.png" : "camaleon/negro.png" ?>"></td>
                <td><img src="<?php echo ($numImagen == 9) ? "camaleon/camaleon_$numImagen.png" : "camaleon/negro.png" ?>"></td>
            </tr>
        </table>
    <?php
    } else {
        $palabraIntroducida = strtolower($_GET['palabraIntroducida']);
        $palabraSecreta = "camaleon";

        if ($palabraIntroducida == $palabraSecreta) {
            echo "<h1>Enhorabuena, has acertado la palabra.</h1>";
            echo "<div><img src='camaleon/camaleon.png'></div>";
        } else {
            echo
            "<h1>Lo siento, no has acertado la palabra.</h1>";
            echo "<a href='index.php'>Volver</a>";
        }
    }
    ?>
</body>

</html>
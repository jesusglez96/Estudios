<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    $intentos = $_REQUEST['intentos'];

    if (isset($_REQUEST["num"])) {
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='2;URL=index.php?intentos=$intentos'>";
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
    if (!(isset($_REQUEST['palabraIntroducida']))) {
        $numImagen = $_REQUEST["num"];
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
        $palabraIntroducida = strtolower($_REQUEST['palabraIntroducida']);
        $palabraSecreta = "camaleon";
        $intentos++;

        if ($palabraIntroducida == $palabraSecreta) {
            echo "<h1>Enhorabuena, has acertado la palabra.</h1>";
            echo "<h2>Has necesitado $intentos intentos.</h2>";
            echo "<div><img src='camaleon/camaleon.png'></div>";
        } else {
            echo
            "<h1>Lo siento, no has acertado la palabra.</h1>";
            echo "<h2>Llevas $intentos intentos.</h2>";;
        ?>
            <form action="index.php" method="post">
                <input type="hidden" name="intentos" id="intentos" value="<?php echo $intentos ?>">
                <input type="submit" value="Volver">
            </form>
    <?php
        }
    }
    ?>
</body>

</html>
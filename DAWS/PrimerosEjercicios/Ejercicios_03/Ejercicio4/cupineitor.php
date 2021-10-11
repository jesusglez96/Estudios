<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cupineitor</title>
    <style>
        body {
            text-align: center;
        }

        fieldset {
            display: inline-block;
        }

        form {
            display: inline-block;
        }
    </style>
</head>

<body>
    <?php
    $personas = unserialize(base64_decode($_REQUEST["arPersonas"]));
    $arPersonas = base64_encode(serialize($personas));
    echo "<pre> " .
        var_dump($personas)
        . "</pre>";
    ?>
    <h1>Cupineitor</h1>
    <hr>
    <h2>Creador de parejas</h2>

    <fieldset>
        <h3>Elige que tipo de pareja quieres crear:</h3>
        <form action="cupineitor.php" method="post">
            <input type="hidden" name="arPersonas" value="<?= $arPersonas ?>">
            <input type="hidden" name="opcion" value="hetero">
            <input type="submit" value="Heterosexual">
        </form>
        <form action="cupineitor.php" method="post">
            <input type="hidden" name="arPersonas" value="<?= $arPersonas ?>">
            <input type="hidden" name="opcion" value="homo">
            <input type="submit" value="Homosexual">
        </form>
        <form action="cupineitor.php" method="post">
            <input type="hidden" name="arPersonas" value="<?= $arPersonas ?>">
            <input type="hidden" name="opcion" value="bi">
            <input type="submit" value="Bisexual">
        </form>
    </fieldset>

    <?php
    if (isset($_REQUEST["opcion"])) {
        $opcion = $_REQUEST["opcion"];

        do {
            $persona1 = $personas[rand(0, (count($personas) - 1))];
        } while ($persona1["gusto"] != $opcion);

        switch ($opcion) {
            case 'hetero':
                do {
                    $persona2 = $personas[rand(0, (count($personas) - 1))];
                } while (($persona2 == $persona1) || ($persona2["sexo"] == $persona1["sexo"]) || ($persona2["gusto"] == "homo"));
                break;
            case 'homo':
                do {
                    $persona2 = $personas[rand(0, (count($personas) - 1))];
                } while (($persona2 == $persona1) || ($persona2["sexo"] != $persona1["sexo"]) || ($persona2["gusto"] == "hetero"));
                break;
            case 'bi':
                do {
                    $persona2 = $personas[rand(0, (count($personas) - 1))];
                } while (($persona2 == $persona1) || (($persona2["sexo"] == $persona1["sexo"]) && ($persona2["gusto"] == "hetero")) || (($persona2["sexo"] != $persona1["sexo"]) && ($persona2["gusto"] == "homo")));
                break;
            default:
                error_log("fatal");
                break;
        }

        echo "<h1>La pareja es " . $persona1['nombre'] . " con " . $persona2['nombre'] . "</h1>";
    }
    ?>

</body>

</html>
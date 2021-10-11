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
    <h1>Cupineitor</h1>
    <hr>
    <h2>Creador de parejas</h2>

    <fieldset>
        <h3>Elige que tipo de pareja quieres crear:</h3>
        <form action="cupineitor.php" method="post">
            <input type="hidden" name="arPersonas" value="<?= $_REQUEST["arPersonas"] ?>">
            <input type="hidden" name="opcion" value="hetero">
            <input type="submit" value="Heterosexual">
        </form>
        <form action="cupineitor.php" method="post">
            <input type="hidden" name="arPersonas" value="<?= $_REQUEST["arPersonas"] ?>">
            <input type="hidden" name="opcion" value="homo">
            <input type="submit" value="Homosexual">
        </form>
        <form action="cupineitor.php" method="post">
            <input type="hidden" name="arPersonas" value="<?= $_REQUEST["arPersonas"] ?>">
            <input type="hidden" name="opcion" value="bi">
            <input type="submit" value="Bisexual">
        </form>
    </fieldset>

    <?php
    if (isset($_REQUEST["opcion"])) {
    }
    ?>

</body>

</html>
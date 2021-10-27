<!-- Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y nos diga
cuantos números se han introducido, la media de los impares y el mayor de los pares. El número negativo sólo
se utiliza para indicar el final de la introducción de datos pero no se incluye en el cómputo. Utiliza sesiones. -->

<?php
session_start();
if (!isset($_SESSION["arrNums"])) {
    $_SESSION["arrNums"] = [];
}
if (isset($_REQUEST["num"])) {
    if ($_REQUEST["num"] >= 0) {
        $_SESSION["arrNums"][] = $_REQUEST["num"];
    } else {
        $total = count($_SESSION["arrNums"]);
        $mediaImpar = [];
        $parMayor = 0;
        for ($i = 0; $i < count($_SESSION["arrNums"]); $i++) {
            if ($_SESSION["arrNums"][$i] % 2 != 0) {
                $mediaImpar[] = $_SESSION["arrNums"][$i];
            } else {
                if ($parMayor < $_SESSION["arrNums"][$i]) {
                    $parMayor =
                        $_SESSION["arrNums"][$i];
                }
            }
        }

        $media = array_sum($mediaImpar) / count($mediaImpar);
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Programa que hace cosas</h1>
    <form action="#" method="post">
        <label for="num">
            Número: <input type="number" name="num" id="num">
        </label>
        <input type="submit" value="Enviar">
    </form>
    <?php
    // var_dump(($_SESSION["arrNums"]));
    if (isset($_REQUEST["num"])) {
        if ($_REQUEST["num"] < 0) {
    ?>
            <h2>El número total de números introducidos es: <?= $total ?>, la media de los impares es: <?= $media ?> y el par mayor es: <?= $parMayor ?></h2>
    <?php
            session_destroy();
        }
    }
    ?>
</body>

</html>
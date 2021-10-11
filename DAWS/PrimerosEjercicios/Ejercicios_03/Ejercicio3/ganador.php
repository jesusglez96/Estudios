<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 40em;
            height: 20em;
        }
    </style>
</head>

<body>
    <?php
    $palabraSecreta = "camaleon";
    $palabraIntroducida = $_REQUEST["palabraIntroducida"];
    $intentos = $_REQUEST["intentos"];

    if ($palabraIntroducida == $palabraSecreta) {
    ?>
        <h1>CONGRATULATIONS!</h1>
        <h2>Has acertado la palabra secreta en <?= $intentos ?> intentos!</h2>
        <img src="camaleon.png" alt="">
    <?php
    } else {
    ?>
        <h1>BAAAAAD. No has acertado la palabra secreta.</h1>
        <h2>Sigue intentandolo.</h2>
        <form action="index.php" method="get">
            <input type="hidden" name="cad" value="<?= $_REQUEST["cad"] ?>">
            <input type="hidden" name="act" value="<?= $_REQUEST["act"] ?>">
            <input type="hidden" name="intentos" value="<?= $intentos ?>">
            <input type="submit" name="volver" id="volver" value="Volver">
        </form>
    <?php
    }
    ?>

</body>

</html>
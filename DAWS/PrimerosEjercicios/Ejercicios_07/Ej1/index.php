<?php
session_start();
if (isset($_REQUEST["arrNums"])) {
    if ($_REQUEST["arrNums"] > 0) {
        $_SESSION["arrNums"][] = $_REQUEST["arrNums"];
    } else {
        $media = array_sum($_SESSION["arrNums"]) / count($_SESSION["arrNums"]);
    }
}
if (!isset($_SESSION["arrNums"])) {
    $_SESSION["arrNums"] = [];
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
    <form action="#" method="post">

    </form>
    <?php

    ?>
</body>

</html>
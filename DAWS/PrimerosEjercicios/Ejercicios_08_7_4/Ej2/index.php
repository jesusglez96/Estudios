<?php
$votoSi = 0;
$votoNo = 0;

// setcookie("votos", null, -1);
if (!isset($_COOKIE["votosi"])) {
    setcookie("votosi", 0, time() + 60 * 60 * 24 * 30);
    setcookie("votono", 0, time() + 60 * 60 * 24 * 30);
} else {
    $votoSi = $_COOKIE["votosi"];
    $votoNo = $_COOKIE["votono"];
}
if (isset($_POST["votosi"])) {
    $votoSi++;
    setcookie("votosi", $votoSi, time() + 60 * 60 * 24 * 30);
}
if (isset($_POST["votono"])) {
    $votoNo++;
    setcookie("votono", $votoNo, time() + 60 * 60 * 24 * 30);
}
if (isset($_POST["clean"])) {
    setcookie("votosi", null, -1);
    setcookie("votono", null, -1);
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style>
        .container {
            border: 1px solid black;
            border-radius: 10px;
        }

        h3 {
            margin-left: 10px;
            display: inline-block;
        }

        input {
            margin: 10px;
        }
    </style>
</head>

<body>
    <h1>Votaciones 2 DAW</h1>
    <div class="container">
        <div class="container_si">
            <h3>Si</h3>
            <?php
            for ($i = 0; $i < $votoSi; $i++)
                echo "<i class='fas fa-times-circle' style='color: green;'></i>";
            ?>
        </div>
        <div class="container_no">
            <h3>No</h3>
            <?php
            for ($i = 0; $i < $votoNo; $i++)
                echo "<i class='fas fa-times-circle' style='color: red;'></i>";
            ?>
        </div>
    </div>
    <form action="#" method="post">
        <input type="submit" value="SI" name="votosi" id="votosi">
        <input type="submit" value="NO" name="votono" id="votono">
        <input type="submit" value="LIMPIAR" name="clean" id="clean">
    </form>
</body>

</html>
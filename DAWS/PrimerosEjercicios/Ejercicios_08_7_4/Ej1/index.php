<?php
session_start();
if (!isset($_SESSION["paleta"])) {
    $_SESSION["paleta"] = [];
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

<body id="master">
    <form action="#" method="post">
        <input type="submit" value="Nuevo Color" name="color" id="color">
        <input type="submit" value="Mostrar paleta" name="paleta" id="paleta">
        <input type="submit" value="Limpiar paleta" name="clean" id="clean">
    </form>

    <?php
    if (isset($_POST["color"])) {
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);
        $str = "rgb($r, $g, $b)";
        $_SESSION["paleta"][] = $str;
    ?>
        <script>
            let master = document.getElementById("master");
            master.style.backgroundColor = "<?= $str ?>";
        </script>
    <?php
    }
    if (isset($_POST["paleta"])) {
        foreach ($_SESSION["paleta"] as $key => $color) {
            echo "<div style='background-color: $color; margin-top: 10px; width: 15em; height: 15em; display: inline-block; text-align: center;'>Color: $color</div>";
        }
    }
    if (isset($_POST["clean"])) {
        session_destroy();
        header("refresh: 0;");
    }
    ?>
</body>

</html>
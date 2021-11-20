<?php
session_start();
if (!isset($_SESSION["articulos"])) {
    $_SESSION["articulos"] = ["Política" => 0, "Deportes" => 0, "Tecnología" => 0];
    $_SESSION["Política"] = [];
    $_SESSION["Deportes"] = [];
    $_SESSION["Tecnología"] = [];
}
if (isset($_POST["clean"])) {
    setcookie("articulos", null, -1);
    foreach ($_SESSION["articulos"] as $key => $categoria) {
        setcookie($key, null, -1);
    }
    session_destroy();
}
if (isset($_POST["save"])) {
    setcookie("articulos", base64_encode(serialize($_SESSION["articulos"])), time() + 60 * 60 * 24 * 30 * 12);
    foreach ($_SESSION["articulos"] as $key => $categoria) {
        setcookie($key, base64_encode(serialize($_SESSION[$key])), time() + 60 * 60 * 24 * 30 * 12);
    }
}
if (isset($_POST["recu"])) {
    $_SESSION["articulos"] = unserialize(base64_decode($_COOKIE["articulos"]));
    foreach ($_SESSION["articulos"] as $key => $categoria) {
        $_SESSION[$key] = unserialize(base64_decode($_COOKIE[$key]));
    }
}
if (isset($_POST["new"])) {
    header("Location: nuevaCategoria.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form:last-child {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>Periodico el Ruiz</h1>
    <h3>Categorias</h3>
    <form action="./añadirNoticia.php" method="post">
        <?php
        foreach ($_SESSION["articulos"] as $key => $categoria) {
            echo "<input type='submit' value='$key' name='categoria'>";
        }
        ?>
    </form>
    <form action="#" method="post">
        <input type="submit" value="Nuevo periodico" name="clean">
        <input type="submit" value="Guardar" name="save">
        <input type="submit" value="Recuperar" name="recu">
        <input type="submit" value="Nueva categoria" name="new">
    </form>
</body>

</html>
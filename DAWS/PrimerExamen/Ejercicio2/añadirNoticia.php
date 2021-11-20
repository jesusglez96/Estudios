<?php
session_start();

if (isset($_POST["categoria"])) {
    $_SESSION["categoria"] = $_POST["categoria"];
}
if (isset($_POST["borrar"])) {
    $_SESSION["articulos"][$_SESSION["categoria"]] = 0;
    $_SESSION[$_SESSION["categoria"]] = [];
}
if (isset($_POST["volver"])) {
    header("Location: index.php");
}
if (isset($_POST["titulo"])) {
    $_SESSION["articulos"][$_SESSION["categoria"]]++;
    $titulo = $_POST["titulo"];
    $cuerpo = strtoupper(substr($_POST["cuerpo"], 0, 1)) . substr($_POST["cuerpo"], 1);
    $hora = date("j/n/Y", time());
    $fecha = date("H:i", time());

    $_SESSION[$_SESSION["categoria"]][] = ["titulo" => $titulo, "cuerpo" => $cuerpo, "fecha" => $fecha, "hora" => $hora];
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
        .formu1 {
            display: table;
            background-color: grey;
            text-align: left;
        }

        label {
            display: table-row;
        }

        label input {
            display: table-cell;
        }
    </style>
</head>

<body>
    <h1>Gestión de noticias de <?= $_SESSION["categoria"] ?></h1>
    <form action="#" method="post" id="formu1">
        <label for="titulo">Titulo: <input type="text" name="titulo" id="titulo"></label>
        <label for="cuerpo">Cuerpo: <textarea name="cuerpo" id="cuerpo" cols="30" rows="10"></textarea></label>
        <input type="submit" value="Añadir noticia">
    </form>
    <form action="#" method="post" id="formu2">
        <input type="submit" value="Borrar todas las noticias" name="borrar">
        <input type="submit" value="Volver a la página principal" name="volver">
    </form>

    <h2>Listado de noticias</h2>
    <?php
    if ($_SESSION["articulos"][$_SESSION["categoria"]] > 0) {
        foreach ($_SESSION[$_SESSION["categoria"]] as $key => $noticia) {
    ?>
            <hr>
            <h3><?= $noticia["titulo"] ?></h3>
            <p><?= $noticia["cuerpo"] ?></p>
            <p><b>Fecha: </b><?= $noticia["fecha"] ?> <b>Hora:</b> <?= $noticia["hora"] ?></p>
            <p></p>

    <?php
        }
    }
    ?>

</body>

</html>
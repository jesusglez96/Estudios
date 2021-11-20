<?php
session_start();
if (isset($_POST["clean"])) {
    session_destroy();
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
        <input type="submit" value="Política" name="categoria">
        <input type="submit" value="Deportes" name="categoria">
        <input type="submit" value="Tecnología" name="categoria">
    </form>
    <form action="#" method="post">
        <input type="submit" value="Nuevo periodico" name="clean">
    </form>
</body>

</html>
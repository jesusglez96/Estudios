<?php
session_start();
if (isset($_POST["new"])) {
    $_SESSION["articulos"] += [$_POST["new"] => 0];
    $_SESSION[$_POST["new"]] = [];
    header("Location: index.php");
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
        <label for="new">
            Nueva categoría: <input type="text" name="new" id="new">
        </label>
    </form>
</body>

</html>
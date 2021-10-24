<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label{
            display: block;
            margin: 1em;
        }
    </style>
</head>
<body>
    <h1>Comprobador de fechas</h1>
    <?php 
    if (isset($_REQUEST["h"])) {
        $h = $_REQUEST["h"];
        $m = $_REQUEST["m"];
        $date = date("h:i", strtotime("$h:$m"));
        echo (checkdate()) ? "<p>La fecha es correcta. " . $date . "</p>" : "<p>La fecha es incorrecta</p>";
    }
    ?>
    <form action="index.php" method="post">
        <label for="h">
            Hora: <input type="number" name="h" id="h">
        </label>
        <label for="m">
            Minutos: <input type="number" name="m" id="m">
        </label>
        <label for="btn">
            <input type="submit" value="Comprobar" id="btn">
        </label>
    </form>
</body>
</html>
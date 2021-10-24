<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php 
        // setlocale(LC_TIME, 'es_ES.UTF-8'); 
        if (isset($_REQUEST["f"])) {
            $date = $_REQUEST["f"];
            date_default_timezone_set("Europe/Madrid");
            setlocale(LC_TIME, 'es_ES.UTF-8'); 
            $dia = strftime("%d de %B de %Y", strtotime($date));
            echo "<h4>El siguiente día es: " . $dia . "</h4>";
        }
    ?>
     <form action="index.php" method="post">
        <label for="f">
            Fecha: <input type="date" name="f" id="f">
        </label>
        <label for="btn">
            <input type="submit" value="Comprobar" id="btn">
        </label>
    </form>
</body>
</html>
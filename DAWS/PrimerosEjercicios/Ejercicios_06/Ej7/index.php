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

     
     //TODO hacer este que no esta hecho



    // date_default_timezone_set("Europe/Madrid");
        // setlocale(LC_TIME, 'es_ES.UTF-8'); 
        if (isset($_REQUEST["a"])) {
            $d = $_REQUEST["d"];
            $m = $_REQUEST["m"];
            $a = $_REQUEST["a"];
            $nxt = strftime("%d de %B de %Y", strtotime("+$d day $m month $a year"));
            echo "<h4>El siguiente día es: " . $nxt . "</h4>";
        }
    ?>
     <form action="index.php" method="post">
        <label for="d">
            Diass: <input type="number" name="d" id="d">
        </label>
        <label for="m">
            Meses: <input type="number" name="m" id="m">
        </label>
        <label for="a">
            Años: <input type="number" name="a" id="a">
        </label>
        <label for="btn">
            <input type="submit" value="Comprobar" id="btn">
        </label>
    </form>
</body>
</html>
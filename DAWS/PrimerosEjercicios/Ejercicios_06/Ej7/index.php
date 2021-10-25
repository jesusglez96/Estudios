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
    setlocale(LC_ALL, "spanish");
    if (isset($_REQUEST["a"])) {
        $fechaN = $_REQUEST["n"];
        $d = $_REQUEST["d"];
        $m = $_REQUEST["m"];
        $a = $_REQUEST["a"];
        $nxt = strftime("%d de %B de %Y", strtotime($fechaN . "+$d day $m month $a year"));
        echo "<h4>El siguiente día es: " . $nxt . "</h4>";
    }
    ?>
    <form action="index.php" method="post">
        <label for="n">
            Fecha de nacimiento: <input type="date" name="n" id="n">
        </label>
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
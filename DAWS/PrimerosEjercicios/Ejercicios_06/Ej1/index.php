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
    if (isset($_REQUEST["day"])) {
        $day = $_REQUEST["day"];
        $month = $_REQUEST["month"];
        $year = $_REQUEST["year"];
        $date = date("d/m/Y", strtotime("$month/$day/$year"));
        echo (checkdate($month, $day, $year)) ? "<p>La fecha es correcta. " . $date . "</p>" : "<p>La fecha es incorrecta</p>";
    }
    ?>
    <form action="index.php" method="post">
        <label for="day">
            Día: <input type="number" name="day" id="day">
        </label>
        <label for="month">
            Mes: <input type="number" name="month" id="month">
        </label>
        <label for="year">
            Año: <input type="number" name="year" id="year">
        </label>
        <label for="btn">
            <input type="submit" value="Comprobar" id="btn">
        </label>
    </form>
</body>
</html>
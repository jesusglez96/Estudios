<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./../controller/index.php" method="post">
        <select name="select" id="select">
            <option value="utrera" name="utrera">Utrera</option>
            <option value="los palacios y villafranca" name="los palacios y villafranca">Los palacios</option>
            <option value="sevilla" name="sevilla">Sevilla</option>
            <input type="submit" value="Ver">
        </select>
    </form>
    <h1>Tiempo en: <b><?= ucfirst($ciudad)  ?></b> </h1>
    <p>Temperatura: <?= $tiempo->main->temp ?></p>
    <p>Humedad: <?= $tiempo->main->humidity ?></p>
    <p>Presion: <?= $tiempo->main->pressure ?></p>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Conversor</h1>
    <form action="#" method="post">
        <label for="moneda">Moneda: </label>
        <select name="moneda" id="moneda">
            <option value="eu">Euro</option>
            <option value="ps">Peseta</option>
        </select>
        <label for="cantidad">Cantidad: </label>
        <input type="text" name="cantidad">
        <input type="submit" value="Convertir">
    </form>
    <?php
    if (isset($_REQUEST["moneda"]) && isset($_REQUEST["cantidad"])) {
        $cambio = json_decode(file_get_contents("http://localhost//DAWS/TercerosEjercicios/Ejercicios12.6/ej1/model/conversor.php?moneda=" . $_REQUEST['moneda'] . "&dinero=" . $_REQUEST["cantidad"]));
        $cambio = round($cambio, 2);
        switch ($_REQUEST["moneda"]) {
            case "eu":
                $moneda = "ps";
                break;
            case "ps":
                $moneda = "€";
                break;
            default:
        }
        echo "<p>El cambio es: $cambio $moneda</p>";
    }
    ?>
</body>

</html>
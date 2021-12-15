<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>El tiempo en Andalucía</h1>
    <?php 
        if (isset($_REQUEST["provincias"])){
            $provincia = $_REQUEST["provincias"];
            $datos = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=$provincia,Spain&APPID=7acdfa73f122acf264a32bcefbe9e21b");        
            $tiempo = json_decode($datos);
        }
        //echo "<h3>Datos en un objeto: </h3>";
        //print_r($tiempo);
        echo "<hr>";
    ?>

    <form action="#" method="post">
    Selecciona una provincia:
        <select name="provincias" id="provincias">
            <option value="Sevilla">Sevilla</option>
            <option value="Huelva">Huelva</option>
            <option value="Cadiz">Cádiz</option>
            <option value="Malaga">Málaga</option>
            <option value="Cordoba">Córdoba</option>
            <option value="Jaen">Jaén</option>
            <option value="Granada">Granada</option>
            <option value="Almeria">Almería</option>
        </select>
        <input type="submit" value="Ver temperatura">
    </form>
    <br>
    <?php
    if(isset($tiempo)) {
        echo "<h2>$provincia</h2>";
        echo "Temperatura: ".$tiempo->{"main"}->{"temp"}."ºC<br>";
        echo "Humedad: ".$tiempo->{"main"}->{"humidity"}."%<br>";
        echo "Presión: ".$tiempo->{"main"}->{"pressure"}."mb<br><br>";
        //print_r($datos);
    }
    ?>
</body>
</html>
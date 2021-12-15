<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

    <?php 
        session_start();
    
        if (!isset($_SESSION["mascotas"])){
            $_SESSION["mascotas"] = array();
        }

        $fecha="#".date("d-m-Y")."#";

        if(isset($_REQUEST["grabar"])) {
            $existeFecha=miraFecha($fecha);
            $file = fopen("mascotas.txt","a");
            if (!$existeFecha) {
                fwrite($file, $fecha.PHP_EOL);
            }
            foreach ($_SESSION["mascotas"] as $nombre => $mascota) {
                fwrite($file, $nombre.'-'.$mascota[0].'-'.$mascota[1].PHP_EOL);
            }
            fclose($file);
            $_SESSION["mascotas"] = [];   
        } else {
            if (isset($_POST["enviar"])) {
                $_SESSION["mascotas"][$_POST["nombre"]] = [$_POST["tipo"],$_POST["edad"]];
            } else {
                $_SESSION["mascotas"] = [];
            }
        }
        echo "<table border='1'>";
        echo '<tr><th colspan="4">FECHA: '.$fecha.'</th></tr>';
        echo '<tr><th>Nombre</th><th>Animal</th><th>Edad</th></tr>';
        foreach ($_SESSION["mascotas"] as $nombre => $mascota){
            echo "<tr><td>$nombre</td><td>$mascota[0]</td><td>$mascota[1]</td></tr>";
        }
    ?>

    <h2>Añadir mascota</h2>
    <form action="#" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Tipo: <input type="text" name="tipo"><br>
        Edad: <input type="number" name="edad"><br><br>
        <input type="submit" name="enviar" value="Añadir nueva mascota">
        Grabar las mascotas en el fichero:
        <input type="submit" name="grabar" value="Grabar">
    </form>
    <br><br>

    <?php 
        function miraFecha($fecha){
            $fecha=$fecha.PHP_EOL;
            $lineas = file("mascotas.txt");
            return in_array($fecha,$lineas);
        }

        function miraFecha2($fecha){
            $file = fopen("mascotas.txt","r");
            $linea=trim(fgets($file));
            while($linea!=$fecha && !feof($file)) {
                $linea=trim(fgets($file));
            }
            fclose($file);
            return $linea==$fecha;
        }
    
    ?>
</body>
</html>
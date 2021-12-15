<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php 
        session_start();

        echo "La fecha de hoy es: ".date("d-m-Y")."<br>";
        if (!isset($_SESSION["mascotas"])){
            $_SESSION["masctoas"] = [];
        }

        if (isset($_REQUEST["fecha"])){
            unset($_SESSION["mascotas"]);
            $fecha="#".date("d-m-Y")."#";
            $file = fopen("mascotas.txt","r");
        
        do {
            $linea=trim(fgets($file));
        }while ($linea!=$fecha && !feof($file));

        do {
            $linea = fgets($file);
            if (substr($linea, 0, 1)!="#" && $linea!="") {
                $pet=explode("-",$linea);
                $_SESSION["mascotas"][$pet[0]]=[$pet[1],$pet[2]];
            }
        }while(substr($linea, 0, 1)!="#" && !feof($file));

        echo "<table border='1'>";
        echo '<tr><th colspan="4">FECHA: '.$fecha.'</th></tr>';
        echo '<tr><th>Nombre</th><th>Animal</th><th>Edad</th></tr>';

        if (isset($_SESSION["mascotas"])){
            foreach ($_SESSION["mascotas"] as $nombre => $mascota){
                echo "<tr><td>$nombre</td><td>$mascota[0]</td><td>$mascota[1]</td></tr>";
            }
        }
        echo "</table>";
        fclose($file);
        }

        $file = fopen("mascotas.txt","r");
        $fechas = [];
        $linea = trim(fgets($file));

        while(!feof($file)) {
            if (substr($linea,0,1)=="#") {
                $fechas[] = substr($linea,1,-1);
            }
            $linea=trim(fgets($file));
        }
        fclose($file);
    ?>
    <br><br>
    <form action="#" method="post">
        Fecha de inscripción:
        <select name="fecha">
    <?php 
        foreach ($fechas as $fecha) {
            echo "<option value=$fecha>$fecha</option";
        }
    ?>
        </select> 
        <input type="submit" value="Cargar mascotas"> 
    </form>
    
</body>
</html>
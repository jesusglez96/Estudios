<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de cliente</title>
</head>
<body>
    <?php 
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "");
        } catch (PDOException $e) {
            echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
            die ("Error: " . $e->getMessage());
        }

        $consulta = $conexion->query("SELECT DNI from cliente WHERE DNI=".$_REQUEST["dni"]);
        if ($consulta->rowCount() > 0) {
            ?>
            Ya existe un cliente con DNI <?= $_REQUEST["dni"] ?><br>
            Por favor, vuelca a la <a href="ejercicio1.php">Página de alta de cliente</a>
        
        <?php
        } else {
            if(isset($_REQUEST["dni"]) && isset($_REQUEST["nombre"]) && isset($_REQUEST["direccion"]) && isset($_REQUEST["telefono"])){
                $dni = $_REQUEST["dni"];
                $nombre = $_REQUEST["nombre"];
                $direccion = $_REQUEST["direccion"];
                $telefono = $_REQUEST["telefono"];


                $insercion = "INSERT INTO cliente (DNI, Nombre, Dirección, Teléfono) VALUES ('$dni','$nombre','$direccion','$telefono')";
                $conexion->exec($insercion);
                echo "Cliente dado de alta correctamente";
                $conexion->close;
            }
            header("Location: ejercicio1.php");
            exit;
        }
    ?>
</body>
</html>
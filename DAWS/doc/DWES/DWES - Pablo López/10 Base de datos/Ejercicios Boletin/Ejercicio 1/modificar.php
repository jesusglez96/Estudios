<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "");
        } catch (PDOException $e) {
            echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
            die ("Error: " . $e->getMessage());
        }
    
        if (isset($_REQUEST["dni"])){
            ?>
            <form action="#" method="POST">
                Nuevo Nombre: <input type="text" name="nuevoNombre"><br>
                Nueva Dirección: <input type="text" name="nuevaDireccion"><br>
                Nuevo Teléfono: <input type="text" name="nuevoTel"><br>
                <input type="hidden" name="dniModificar" value="<?php $_REQUEST["dni"] ?>">
                <input type="submit" name="enviar" value="Enviar">
            </form>
            <?php
        }
        
            if(isset($_REQUEST["nuevoNombre"]) && isset($_REQUEST["nuevaDireccion"]) && isset($_REQUEST["nuevoTel"])){
                    $update = "UPDATE cliente SET Nombre=\"$_POST[nuevoNombre]\", Dirección=\"$_POST[nuevaDireccion]\",Teléfono=\"$_POST[nuevoTel]\" WHERE DNI=\"$_POST[dniModificar]\"";
                    $conexion->exec($update);
                    echo "Cliente modificado correctamente";
                    $conexion->close;
                    header("Location: ejercicio1.php");
                    exit;
                }
            
            
            ?>
</body>
</html>
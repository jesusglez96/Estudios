<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php 
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "");
        } catch (PDOException $e) {
            echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
            die ("Error: " . $e->getMessage());
        }

        $consulta = $conexion->query("SELECT * FROM cliente");
        echo "<table border='1'>";
        echo "<tr><th>DNI</th><th>Nombre</th><th>Dirección</th><th>Teléfono</th><th colspan='2'>Modificaciones</th></tr>";
        while ($cliente = $consulta->fetchObject()) {
            echo "<tr><td>$cliente->DNI</td><td>$cliente->Nombre</td><td>$cliente->Dirección</td><td>$cliente->Teléfono</td>";
            echo "<td><form action='modificar.php' method='POST'><input type='submit' name='modificar' value='Modificar'><input type='hidden' name='dni' value='$cliente->DNI'></td></form>";
            echo "<td><form action='borrar.php' method='POST'><input type='submit' name='borrar' value='Borrar'><input type='hidden' name='dni' value='$cliente->DNI'></td></tr></form>";
        }
    ?>
    <form action="alta.php" method="POST">
        <td><input type="number" name="dni" placeholder="DNI"></td>
        <td><input type="text" name="nombre" placeholder="Nombre"></td>
        <td><input type="text" name="direccion" placeholder="Dirección"></td>
        <td><input type="text" name="telefono" placeholder="Teléfono"></td>
        <td colspan='2' align="center"><input type="submit" name="nuevo" value="Nuevo cliente"></td>
    </form>
    </table>
    <br><br>
</body>
</html>
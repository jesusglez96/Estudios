<?php
try {
    $conexion = new PDO("mysql:host=localhost;dbname=ejercicios_9_4;charset=utf8", "root");
} catch (PDOException $e) {
    echo "Conexion fallida";
    die("Error: " . $e->getMessage());
}
$consulta = $conexion->query("SELECT * FROM Clientes");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            text-align: center;
            margin: auto;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>DNI</th>
            <th>NOMBRE</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>
        </tr>
        <?php
        while ($registro = $consulta->fetchObject()) {
        ?>
            <tr>
                <form action="#" method="post">
                    <td><?= $registro->dni ?></td>
                    <td><?= $registro->nombre ?></td>
                    <td><?= $registro->direccion ?></td>
                    <td><?= $registro->telefono ?></td>
                    <input type="hidden" name="registro" value="<?= $registro->dni ?>">
                    <td><input type="submit" value="Eliminar" name="eliminar"></td>
                    <td><input type="submit" value="Modificar" name="modificar"></td>
                </form>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td><input type="text" name="dni" id=""></td>
            <td><input type="text" name="nombre" id=""></td>
            <td><input type="text" name="direccion" id=""></td>
            <td><input type="text" name="telefono" id=""></td>
            <td><input type="submit" value="Añadir" name="annadir"></td>
        </tr>
    </table>
</body>

</html>
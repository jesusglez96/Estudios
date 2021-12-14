<?php
try {
    $conexion = new PDO("mysql:host=localhost;dbname=ejercicios_9_4_1;charset=utf8", "root");
} catch (PDOException $e) {
    die("Error: " . $e->getMessage("Conexion fallida"));
}

if (isset($_POST["annadir"])) {
    $dni = $_POST["dni"];
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];

    $conexion->query("INSERT INTO ejercicios_9_4_1.Clientes (dni, nombre, direccion, telefono) VALUES ('$dni', '$nombre', '$direccion', '$telefono')");
    // header("refresh:0;");
}
/* if (isset($_POST["eliminar"])) {
    $dni = $_POST["dni"];
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    
    $conexion->query("INSERT INTO ejercicios_9_4_1.Clientes (dni, nombre, direccion, telefono) VALUES ('$dni', '$nombre', '$direccion', '$telefono')");
    header("refresh:0;");
} */
// if (isset($_POST["eliminar"])) {
//     echo "hola";
//     $dni = $_POST["dni"];

//     $conexion->query("DELETE FROM ejercicios_9_4_1.Clientes WHERE dni+'$dni'");
//     // header("refresh:0;");
// }
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

                <td><?= $registro->dni ?></td>
                <td><?= $registro->nombre ?></td>
                <td><?= $registro->direccion ?></td>
                <td><?= $registro->telefono ?></td>

                <td>
                    <form action="eliminar.php" method="post"> <input type="hidden" name="dni" value="<?= $registro->dni ?>"><input type="submit" value="Eliminar" name="eliminar"></form>
                </td>
                <td>
                    <form action="modificar.php" method="post"> <input type="hidden" name="dni" value="<?= $registro->dni ?>"><input type="submit" value="Modificar" name="modificar"></form>
                </td>

            </tr>
            <!-- while ($fila= $productosFiltrados->fetchObject()) {?>
            <tr class="modo1">
                <td><?= $fila->id ?></td>
                <td><?= $fila->nombre ?></td>
                <td><?= $fila->precioCompra ?></td>
                <td><?= $fila->precioVenta ?></td>
                <td><?= $fila->margen ?></td>
                <td><?= $fila->stock ?></td>
                <td>
                    <form action="confimacionEliminado.php" method="get"> <input type="hidden" name="dni" value="<?php echo $fila->id ?>"><input type="submit" value="Eliminar" name="eliminar"></form>
                </td>
                <td>
                    <form action="modificar.php" method="get"><input type="hidden" name="dni" value="<?php echo $fila->id ?>"><input type="submit" value="Modificar" name="modificar"></form>
                </td>
                <td>
                    <form action="" method="post"><input type="hidden" name="id" value="<?php echo $fila->id ?>"><input type="hidden" name="stock" value="<?php echo $fila->stock ?>"> <input type="submit" value="Entrada" name="entrada"></form>
                </td>
                <td>
                    <form action="" method="post"><input type="hidden" name="id" value="<?php echo $fila->id ?>"><input type="hidden" name="stock" value="<?php echo $fila->stock ?>"><input type="submit" value="Salida" name="salida"></form>
                </td>
            </tr> -->
        <?php
        }
        ?>
        <tr>
            <form action="#" method="post">
                <td><input type="text" name="dni" id=""></td>
                <td><input type="text" name="nombre" id=""></td>
                <td><input type="text" name="direccion" id=""></td>
                <td><input type="text" name="telefono" id=""></td>
                <td><input type="submit" value="Añadir" name="annadir"></td>
            </form>
        </tr>
    </table>
</body>

</html>
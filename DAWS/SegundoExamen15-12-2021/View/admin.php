<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="StyleSheet" href="../View/estilos.css" type="text/css">
    <title>

    </title>
    <link rel="stylesheet" href="estilos.css">
    </meta>
</head>

<body>
    <div class="contenedor">
        <h1>Perfil Administrador: <?= $_SESSION["usuario"]["nombre"] ?></h1>
        <table border="1">
            <tr>
                <th>DESCRIPCION</th>
                <th>PROFESOR</th>
                <th>ESTADO</th>
                <th>REPARADOR</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            foreach ($data['incidencias'] as $incidencia) {

            ?>
                <tr>
                    <td><?= $incidencia->getdescripcion() ?></td>
                    <td><?= $incidencia->getprofesor() ?></td>
                    <td><?= $incidencia->getfecha() ?></td>
                    <td><?= $incidencia->getestado() ?></td>
                    <td>
                        <?php
                        $reparador = $incidencia->getadmin();
                        if ($reparador != null) {
                            echo $reparador;
                        } else {
                            echo "";
                        }
                        ?>
                    </td>
                    <td>
                        <form action="../Controller/borraIncidencia.php" method="post">
                            <input type="hidden" name="id" value="<?= $incidencia->getid() ?>">
                            <input type="submit" value="Borrar">
                        </form>
                    </td>
                    <td>
                        <form action="../Controller/repararIncidencia.php" method="post">
                            <input type="hidden" name="id" value="<?= $incidencia->getid() ?>">
                            <input type="submit" value="Reparar">
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>
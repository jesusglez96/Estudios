<?php
session_start();
echo "<pre>";
var_dump($_SESSION["carrito"]);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/ee862da9d8.js" crossorigin="anonymous"></script>
    <style>
        h1 {
            text-align: center;
        }

        table {
            margin: auto;
            border-collapse: collapse;
        }

        tr {
            border-bottom: 1px solid black;
        }

        td {
            text-align: center;
            width: 150px;
            height: 150px;
        }

        img {
            width: 100%;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Cantidad</th>
            <th>Producto</th>
            <th>Imagen</th>
            <th><a href="index.php"><i class="fas fa-shopping-cart"></i></a></th>
        </tr>
        <form action="#" method="post">
            <?php
            foreach ($_SESSION["carrito"] as $nombre => $cantidad) {
            ?>
                <tr>
                    <td><?= $cantidad ?></td>
                    <td><?= $nombre ?></td>
                    <td><img src="<?= $_SESSION["productos"][$nombre]["img"] ?>" alt=""></td>
                    <input type="hidden" name="producto" value="<?= $nombre ?>">
                    <td><input type="submit" value="Eliminar" name="eliminar"></td>
                </tr>
            <?php
            }
            ?>
        </form>

    </table>
</body>

</html>
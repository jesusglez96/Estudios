<?php
session_start();
if (!isset($_SESSION["productos"])) {
    if (isset($_COOKIE["productos"])) {
        $_SESSION["productos"] = $_COOKIE["productos"];
    } else {
        $_SESSION["productos"] = [
            "raton" => ["precio" => 9.99, "img" => "./img/raton.jpg"],
            "teclado" => ["precio" => 49.99, "img" => "./img/teclado.jpg"],
            "pantalla" => ["precio" => 149.99, "img" => "./img/pantalla.jpg"],
            "torre" => ["precio" => 449.99, "img" => "./img/torre.jpg"],
            "mesa" => ["precio" => 99.99, "img" => "./img/mesa.jpg"]
        ];
    }
}
if (!isset($_SESSION["carrito"])) {
    if (isset($_COOKIE["carrito"])) {
        $_SESSION["carrito"] = $_COOKIE["carrito"];
    } else {
        $_SESSION["carrito"] = [];
    }
}
var_dump($_SESSION["carrito"]);
if (isset($_POST["add"])) {
    if (array_key_exists($_POST["producto"], $_SESSION["carrito"])) {
        $_SESSION["carrito"][$_POST["producto"]]++;
    } else {
        $_SESSION["carrito"][$_POST["producto"]] = 1;
    }
}
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
        body {
            text-align: center;

        }

        /* div {
            text-align: center;
        } */

        table {
            margin: auto;
            text-align: center;
            width: 60vw;
        }

        img {
            width: 250px;
        }
    </style>
</head>

<body>
    <h1>Tiendecita</h1>
    <hr>
    <!-- <div> -->
    <table>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th><a href="carrito.php"><i class="fas fa-shopping-cart"></i></a></th>
        </tr>
        <form action="#" method="post">
            <?php
            foreach ($_SESSION["productos"] as $key => $producto) {
            ?>
                <tr>
                    <td> <img src="<?= $producto['img'] ?>" alt=""></td>
                    <td> <?= $producto['precio'] ?>€</td>
                    <td>
                        <input type="hidden" name="producto" value="<?= $key ?>">
                        <input type="submit" value="Añadir a la cesta" name="add" id="add">
                    </td>
                </tr>
            <?php
            }
            ?>
        </form>

    </table>
    <!-- </div> -->
</body>

</html>
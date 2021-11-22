<?php
session_start();
if (!isset($_SESSION["productos"])) {
    $productos = file("catalogo.txt");
    foreach ($productos as $key => $value) {
        $aux = explode("-", $value);
        $_SESSION["productos"][$aux[0]] = ["precio" => $aux[1], "img" => $aux[2]];
    }
}
echo "<pre> productos ";
var_dump($_SESSION["productos"]);
echo "</pre>";

if (!isset($_SESSION["carrito"])) {
    if (isset($_COOKIE["carrito"])) {
        $_SESSION["carrito"] = unserialize(base64_decode($_COOKIE["carrito"]));
    } else {
        $_SESSION["carrito"] = [];
    }
}

if (isset($_REQUEST["comprar"])) {
    if (array_key_exists($_POST["producto"], $_SESSION["carrito"])) {
        $_SESSION["carrito"][$_POST["producto"]]++;
        setcookie("carrito", base64_encode(serialize($_SESSION["carrito"])), strtotime("+1 year"));
    } else {
        $_SESSION["carrito"][$_POST["producto"]] = 1;
        setcookie("producto", base64_encode(serialize($_SESSION["carrito"])), strtotime("+1 year"));
    }
}
echo "<pre> carrito ";
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
        #mod {
            background-color: lightblue;
            border: 1px solid black;
            border-radius: 10px;
            color: black;
            display: block;
            padding: 10px;
            margin: 30px auto;
            text-align: center;
            text-decoration: none;
            width: 160px;


            transition: scale();
            transition-duration: 1s;
            transition-timing-function: ease;

        }

        #mod:hover {
            transform: scale(1.25);
        }

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
    <h1>Tienda</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th><a href="carrito.php"><i class="fas fa-shopping-cart"></i></a></th>
        </tr>
        <form action="#" method="post">
            <?php
            foreach ($_SESSION["productos"] as $nombre => $producto) {
            ?>
                <tr>
                    <td><?= $nombre ?></td>
                    <td><?= $producto["precio"] ?></td>
                    <td><img src="<?= $producto["img"] ?>" alt=""></td>
                    <input type="hidden" name="producto" value="<?= $nombre ?>">
                    <td><input type="submit" value="comprar" name="comprar"></td>
                </tr>
            <?php
            }
            ?>

        </form>
    </table>
    <a id="mod" href="./productos.php">Modificar productos</a>
</body>

</html>
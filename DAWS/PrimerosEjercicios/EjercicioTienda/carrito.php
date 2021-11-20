<?php
session_start();
if (count($_SESSION["carrito"]) == 0) {
    header("Location: index.php");
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

</head>

<body>
    <h1>Carricito</h1>
    <hr>

    <table>
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th><a href="index.php"><i class="fa-solid fa-arrow-left"></i></a></th>
        </tr>
        <form action="#" method="post">
            <?php
            foreach ($_SESSION["productos"] as $key => $producto) {
                if ($_SESSION["carrito"][$key] > 0) {
            ?>
                    <tr>
                        <td> <img src="<?= $producto['img'] ?>" alt=""></td>
                        <td> <?= $_SESSION["carrito"][$key] ?>€</td>
                        <td>
                            <input type="hidden" name="producto" value="<?= $key ?>">
                            <input type="submit" value="Borrar" name="delete" id="delete">
                        </td>
                    </tr>
            <?php
                }
            }
            ?>


        </form>

    </table>

</body>

</html>
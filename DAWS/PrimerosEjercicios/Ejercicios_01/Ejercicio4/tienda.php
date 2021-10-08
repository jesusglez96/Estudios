<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <style>
        .padre{
            width: 100%;
            height: 100%;
            position: absolute;
            background: linear-gradient(to bottom right, burlywood, aliceblue);
        }
        .tabla{
            margin: auto;
            text-align: center;
        }

        tr,
        td,
        th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php 
        $tienda1 = $_GET["tienda1"];
        $tienda2 = $_GET["tienda2"];
        $tienda3 = $_GET["tienda3"];
        $media = ($tienda1 + $tienda2 + $tienda3) / 3;

        
    ?>
    <div class="padre">
        <h1>Precios</h1>

        <table class="tabla">
            <tr>
                <th></th>
                <th>Precio</th>
                <th>Diferencia</th>
            </tr>
            <tr>
                <th>Tienda 1</th>
                <td>
                    <?php echo $tienda1; ?>
                </td>
                <td>
                    <?php echo $tienda1-$media ?>
                </td>
            </tr>
            <tr>
                <th>Tienda 2</th>
                <td>
                    <?php echo $tienda2; ?>
                </td>
                <td>
                    <?php echo $tienda2-$media ?>
                </td>
            </tr>
            <tr>
                <th>Tienda 3</th>
                <td>
                    <?php echo $tienda3; ?>
                </td>
                <td>
                    <?php echo $tienda3-$media ?>
                </td>
            </tr>
            <tr>
                <th>Media</th>
                <td>
                    <?php echo $media; ?>
                </td>
                <td></td>
            </tr>
        </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Diseñar un desarrollo web simple con php que pida al usuario el precio de un producto en tres
    establecimientos distintos denominados “Tienda 1”, “Tienda 2” y “Tienda 3”. Una vez se
    introduzca esta información se debe calcular y mostrar el precio medio del producto en las tres
    tiendas. Mostrar en la página resultado, una tabla con un título, el precio en cada una de las
    tiendas, la media de los tres precios y la diferencia del precio de cada tienda con la media.
    Combina celdas para que quede visualmente agradable. 
    -->
    <?php 
        $producto = $_GET["producto"];
        $preciot1 = $_GET["tienda1"];
        $preciot2 = $_GET["tienda2"];
        $preciot3 = $_GET["tienda3"];

        $media = ($preciot1+$preciot2+$preciot3)/3;

        
        $media = round($media, 2, PHP_ROUND_HALF_UP);

        $dif1 = $preciot1-$media;
        $dif2 = $preciot2-$media;
        $dif3 = $preciot3-$media;    
        
    ?>

    <table border="1" style="border-collapse: collapse">
        <tr >
            <td>Producto</td><th colspan="3"><?php echo $producto ?></th>
        </tr>
        <tr>
            <td rowspan="2">Precios</td><th>Tienda 1</th><th>Tienda 2</th><th>Tienda 3</th>
        </tr>
        <tr align="right">
            <td><?php echo $preciot1?>€</td>
            <td><?php echo $preciot2?>€</td>
            <td><?php echo $preciot3?>€</td>
        </tr>
        <tr>
            <td>Media</td>
            <td colspan="3" align="center"><?php echo $media ?>€</td>
        </tr>
        <tr align="right">
            <td>Diferencia</td>
            <td><?php echo $dif1?>€</td>
            <td><?php echo $dif2?>€</td>
            <td><?php echo $dif3?>€</td>
        </tr>

    </table>

    


</body>
</html>


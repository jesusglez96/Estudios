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

<form action="ejercicio4.php" method="get">  
    <h1>Comparador de precios</h1>
    Producto: <input type="text" name="producto"><br><br>
    Tienda 1: <input type="number" name="tienda1">
    Tienda 2: <input type="number" name="tienda2">
    Tienda 3: <input type="number" name="tienda3"><br><br>
    <input type="submit" value="Comparar">
</form>  

</body>
</html>
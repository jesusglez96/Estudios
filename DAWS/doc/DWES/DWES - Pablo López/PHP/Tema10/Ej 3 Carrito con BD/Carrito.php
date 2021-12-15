<?php
session_start();
try {
    $conexion = new PDO("mysql:host=localhost;dbname=tienda;charset=utf8", "root", "");
} catch (Exception $e) {
    echo ("Imposible acceder a la base de datos");
    die("Error: " . $e->getMessage());
}
if (!isset($_SESSION['productos'])) {
    $consulta = $conexion->query("SELECT * FROM productos");
    while ($prod = $consulta->fetchObject()) {
        $_SESSION['productos'][$prod->nombre]=[$prod->precio,$prod->descripcion];
    }
    if (isset($_COOKIE['cesta'])) {
        $_SESSION['enCesta']=unserialize($_COOKIE['cesta']);
        $_SESSION['total']    = $_COOKIE['total'];
        $_SESSION['cantidad'] = $_COOKIE['cantidad'];
    }
}
if (!isset($_SESSION['enCesta'])) {
    $_SESSION['enCesta'] = [];
    $_SESSION['total'] = 0;
    $_SESSION['cantidad'] = 0;
}
?>
<table border = "1">
    <tr><th colspan=3><br><form action="productos.php" method="post"><input type="submit" value="Administrar Productos" name="administrar"></form></th><th><a href="Cesta.php">CESTA<br><?=$_SESSION['cantidad']?>Prod</th></tr>
<tr><th>Producto</th><th>Precio</th><th>Imagen</th><th></th></tr>
<?php 
  foreach ($_SESSION['productos'] as $prod => $precio) { 
?>
    <tr><td><?=$prod?></td><td><?=$precio[0]?></td><td><a href="Detalle.php?prod=<?=$prod?>"><img style="width:100px" src="<?=$prod?>.png"/></td><td>
    
    <form action="MeteCarro.php" method="post">
        <input type="hidden" name="prod" value="<?=$prod?>">
        <input type="submit" value="Comprar">
    </form>
    <?php
echo '</td></tr>';
}
echo '</table>';
?>

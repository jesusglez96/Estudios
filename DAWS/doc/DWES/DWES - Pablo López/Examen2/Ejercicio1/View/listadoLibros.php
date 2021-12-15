<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="StyleSheet" href="../View/estilos.css" type="text/css">
      <title>
        Listado de libros
      </title>
    </meta>
  </head>
  <body>
    <div class="contenedor">
      <h1>Usuario: <?=$data['user']?></h1>
<table border = "1">
<tr>
  <th>ISBN</th><th>Título</th><th>Estado</th><th>Cliente</th><th>Alquiler</th>
</tr>
<?php
foreach ($data['libros'] as $libro) {
?>
   <tr>
    <td><?=$libro->getIsbn()?></td><td><?=$libro->getTitulo()?></td><td><?=$libro->getEstado()?></td><td><?=$libro->getCliente()?></td>
    <td>
<?php 
  if ($libro->getEstado()=='libre') {
    $destino='alquilar.php';
    $boton='Alquilar';
  }else {
    $destino='devolver.php';
    $boton='Devolver';
  }
?>
    <form action="<?=$destino?>" method="post">
        <input type="hidden" name="isbn" value="<?=$libro->getIsbn()?>">
        <input type="hidden" name="cliente" value="<?=$data['user']?>">
        <input type="submit" value="<?=$boton?>">
    </form>
    </td></tr>
<?php
}
?>
</table>
<h1><a href="cerrarSesion.php">cerrar sesión de <?=$data['user']?></a></h1>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>Listado de libros</title>
    </meta>
  </head>
  <body>

  	<div class="contenedor">
    <h1>
      Usuario: <?php echo $_SESSION["user"] ?>
    </h1>
    <table border="1">
       <tr><th>ISBN</th><th>Titulo</th><th>Estado</th><th>Cliente</th><th>Alquiler</th></tr>
    <?php
		foreach($data['libros'] as $libro) {
	  ?>
     <tr>
         <td><?=$libro->getIsbn()?></td>
         <td><?=$libro->getTitulo()?></td>
         <td><?=$libro->getEstado()?></td>
         <td><?=$libro->getCliente()?></td>
         <?php 
            if($libro->getEstado()=="alquilado"){
                ?>
                <td><form action="../Controller/devolverLibro.php" method="post">
                    <input type="hidden" name="isbn" value="<?=$libro->getIsbn()?>">
                    <input type="hidden" name="cliente" value="<?=$libro->getCliente()?>">
                    <input type="submit" value="Devolver">
                </form></td>
            <?php } 

            if($libro->getEstado()=="libre"){
                ?>
                <td><form action="../Controller/alquilarLibro.php" method="post">
                    <input type="hidden" name="isbn" value="<?=$libro->getIsbn()?>">
                    <input type="submit" value="Alquilar">
                </form></td>
            <?php } ?>
     </tr>
     <?php
        }
      ?>
     </table>
     
      <br><br>
      <form action="../Controller/index.php" method="post">
        <input type="submit" value="Cerrar sesion de <?= $_SESSION["user"]?>">
        <input type="hidden" name="cerrar">
      </form>

    </div>
  </body>
</html>
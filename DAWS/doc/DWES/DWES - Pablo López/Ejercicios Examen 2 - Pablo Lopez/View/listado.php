<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rosalia Listado</title>
</head>
<body>
<div class="contenedor">
    <h1>
      Rosalía - Listado de FANS
    </h1>
    <h2>Operaciones realizadas: <?php echo $_SESSION["operaciones"]?> <a href="reiniciar.php">Reiniciar</a></h2>
    <table border="1">
       <tr><th>ID</th><th>Nombre</th><th>Puntos</th><th>Comunidad</th><th>Sumar Puntos</th><th>Eliminar</th></tr>
    <?php
		foreach($data['socios'] as $socio) {
	  ?>
     <tr>
         <td><?=$socio->getId()?></td>
         <td><?=$socio->getNombre()?></td>
         <td><?=$socio->getPuntos()?></td>
         <td><?=$socio->getComunidad()?></td>
         <td align="center">
            <form action="../Controller/sumaPuntos.php" method="post">
                <input type="hidden" name="id" value="<?=$socio->getId()?>">
                <input type="submit" value="Sumar">
            </form>
        </td>
        <td>
            <form action="../Controller/eliminar.php" method="post">
                <input type="hidden" name="id" value="<?=$socio->getId()?>">
                <input type="submit" value="Eliminar">
            </form>
        </td>
     </tr>
     <?php
        }
      ?>
     </table>

     <h2><a href="nuevoSocio.php">Registrar un nuevo socio</a></h2>

     <form action="volcado.php" method="post">
        <h2>Los fans con mas puntos <input type="number" name="cant" placeholder="Cuantos">
        <input type="submit" value="Volcar al fichero"></h2>
     </form>
    </div>
    
</body>
</html>
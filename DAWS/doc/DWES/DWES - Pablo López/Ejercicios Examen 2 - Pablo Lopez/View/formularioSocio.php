<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Socio</title>
</head>
<body>
<form action="../Controller/nuevoSocio.php" method="post" enctype="multipart/form-data">
	<h3>Socio: <input type="text" name="nombre"></h3>
	<br>
    <h3>Puntos: <input type="number" name="puntos"></h3>
	<br>

    
    <!-- Relleno el select asi porque no se hacerlo con el servicio y asi poder hacer la parte de las cookies -->
    <?php $comunidades = ["Andalucía", "Madrid", "Cataluña", "Murcia", "Aragón"];?>
    <h3>Provincia: <select name="provincia">
                        <?php 
                            foreach($comunidades as $comunidad){
                                if(isset($_SESSION["comunidad"])){
                                    if($comunidad==$_SESSION["comunidad"]){
                                        ?>
                                        <option value="<?=$comunidad?>" selected><?=$comunidad?></option>
                                        <?php
                                    } else {
                                        ?>
                                        <option value="<?=$comunidad?>"><?=$comunidad?></option>
                                        <?php
                                    }
                                }
                                ?>  
                                
                                <?php 
                            }
                        
                        ?>

                        <!--<option value="Andalucía">Andalucía</option>
                        <option value="Madrid" selected>Madrid</option>
                        <option value="Cataluña">Cataluña</option>
                        <option value="Murcia">Murcia</option>
                        <option value="Aragón">Aragón</option>-->
                    </select>
    </h3>
    <br>
    <input type="submit" name="insertar" value="Grabar">
</form>
<h2><a href="../Controller/index.php">Salir</a></h2>
</body>
</html>
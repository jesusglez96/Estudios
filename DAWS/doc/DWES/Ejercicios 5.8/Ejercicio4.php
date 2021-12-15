<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body style="text-align: center;">
    <?php
    if (!isset($_REQUEST['nombre'])) {
        $personas = "";
    } else {
        $personas = $_REQUEST['personas'] . '-' . $_REQUEST['nombre'] . ',' . $_REQUEST['sexo'] . ',' . $_REQUEST['orientacion'];
        echo $personas."<br>";
    }
    ?>
    <div style="width: 500px; margin:auto; ">
    <h1>Cupido ha llegado a la web</h1>
    <form action="" method="post">
        <fieldset> <legend>Añadir personas a la Base de datos</legend>
            <br>
            <strong>NOMBRE</strong> 
                <input type="text" name="nombre"> <br>
            <hr>
            <strong>SEXO</strong> 
                <input type="radio" name="sexo" value="h">Hombre <input type="radio" name="sexo" value="m">Mujer <br>
            <hr>
            <strong>ORIENTACIÓN</strong> 
                <input type="radio" name="orientacion" value="het">Heterosexual
                <input type="radio" name="orientacion" value="hom">Homosexual
                <input type="radio" name="orientacion" value="bis">Bisexual<br>
            <hr>
            <input type="hidden" name="personas" value=<?= $personas?>>
            <input type="submit" value="AÑADIR PERSONA">
            <br><br>
        </fieldset>
    </form>
    <br><br>
    <form action="Ejercicio4-1.php" method="post">
        <fieldset> <legend>Pasar a generar parejas amorosas</legend>
            <br>
            <input type="hidden" name="personas" value=<?= $personas ?>>
            <input type="submit" value="CUPIDO ENTRA EN ACCIÓN">
            <br><br>
        </fieldset>
    </form>
    </div>
</body>

</html>
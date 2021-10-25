<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
     <?php 
        if (isset($_REQUEST["p1"])) {
            $p1 = $_REQUEST["p1"];
            $f1 = $_REQUEST["f1"];
            $p2 = $_REQUEST["p2"];
            $f2 = $_REQUEST["f2"];
            echo ($f1 > $f2) ? "<p>La personas más mayor es $p1</p>" : "<p>La personas más mayor es $p2</p>";
        }
    ?>
     <form action="index.php" method="post">
     <label for="p1">
         Persona 1: <input type="text" name="p1" id="p1">
     </label>   
     <label for="f1">
            Fecha de nacimiento persona 1: <input type="date" name="f1" id="f1">
        </label>
        <label for="p2">
         Persona 2: <input type="text" name="p2" id="p2">
     </label>   
     <label for="f2">
            Fecha de nacimiento persona 2: <input type="date" name="f2" id="f2">
        </label>
        <label for="btn">
            <input type="submit" value="Comprobar" id="btn">
        </label>
    </form>
</body>
</html>
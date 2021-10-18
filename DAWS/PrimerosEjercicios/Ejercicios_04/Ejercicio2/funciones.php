<?php 
function posAleatoria() {
    $ar = [];
    $ar["fl"] = rand(0, 4);
    
    $aux = rand(1, 5);
    switch ($aux) {
        case 1:
            $ar["lt"] = "A";
            break;
        case 2:
            $ar["lt"] = "B";
            break;
        case 3:
            $ar["lt"] = "C";
            break;
        case 4:
            $ar["lt"] = "D";
            break;
        case 5:
            $ar["lt"] = "E";
            break;
        default:
            break;
    }
    return $ar;
}

function ganador() {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Acceso permitido Master</h1>
    <a href="iesruizgijon.es">Acceder</button>
</body>
</html>
<?php
}

function perdedor() {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Acceso denegado intruso</h1>
    <a href="index.php">Volver</button>
</body>
</html>
<?php
}
?>
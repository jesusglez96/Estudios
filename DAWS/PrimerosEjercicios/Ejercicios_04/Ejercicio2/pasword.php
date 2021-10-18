<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include "funciones.php";

    $usr = $_REQUEST["who"];
    var_dump($usr);
    $scrt = unserialize(base64_decode($_REQUEST["secret"]));
    var_dump($scrt);
    $pwd = $_REQUEST["pwd"];
    var_dump($pwd);
    $acierto = false;

    if ($usr == "admin" && $pwd == $scrt["adminPos"]) {
        $acierto = true;
    }
    if ($usr == "user" && $pwd == $scrt["userPos"]) {
        $acierto = true;
    }

    if ($acierto) ganador();
    else perdedor();
    ?>
    
</body>
</html>
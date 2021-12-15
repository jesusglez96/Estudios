<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fans Rosalia</title>
</head>
<body>
<?php 
    session_start();

    if(!isset($_SESSION["operaciones"])){
        $_SESSION["operaciones"]=0;
      }

    if(isset($_COOKIE["comunidad"])){
      $_SESSION["comunidad"]=$_COOKIE["comunidad"];
    }
        require_once '../Model/Socio.php';
        require_once '../Model/Comunidad.php';

        // Obtiene todos los socios
        $data['socios'] = Socio::getSocios(); 

        //Obtiene las comunidades
        /*$data['comunidades'] = Comunidad::getComunidades();

        if(!isset($_SESSION["comunidades"])){
          $_SESSION["comunidades"] = $data["comunidades"];
        }*/
        
      
        // Carga la vista de listado
        include '../View/listado.php';

        ?>
</body>
</html>
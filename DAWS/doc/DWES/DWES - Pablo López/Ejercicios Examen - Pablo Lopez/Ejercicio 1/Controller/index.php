<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acceso Biblioteca</title>
</head>
<body>
    <?php 
    session_start();

      if(isset($_REQUEST["cerrar"])) {
        session_destroy();
        header("refresh: 0;");
      }

      if(!isset($_SESSION["user"])){
        $_SESSION["user"]="";
      }
    
      if(isset($_REQUEST["usuario"]) && $_REQUEST["usuario"]!="") {
        $_SESSION["user"] = $_REQUEST["usuario"];
      }

      if(isset($_SESSION["user"]) && $_SESSION["user"]!=""){
        require_once '../Model/Libro.php';

        // Obtiene todos los libros
        $data['libros'] = Libro::getLibros(); 
      
        // Carga la vista de listado
        include '../View/listado.php';
      } else {
        include '../View/login.php';

        ?>
        
    </body>
    </html>
      <?php } ?>
  
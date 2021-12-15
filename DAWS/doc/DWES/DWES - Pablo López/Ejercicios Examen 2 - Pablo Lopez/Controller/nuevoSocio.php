<?php 
  session_start();
  
if (isset($_POST['insertar'])) {
  require_once '../Model/Socio.php';
  $socio = new Socio(null, $_POST['nombre'], $_POST['puntos'], $_POST["provincia"]);
  $socio->insert();
  header("Location: index.php");
  $_SESSION["operaciones"]++;
  setcookie("comunidad", $_POST["provincia"], time() + 365*24*60*60);
}else{
  include "../View/formularioSocio.php";
}

?>
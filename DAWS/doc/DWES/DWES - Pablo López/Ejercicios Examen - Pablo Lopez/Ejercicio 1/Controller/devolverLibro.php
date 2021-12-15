<?php 
  require_once '../Model/Libro.php';
  session_start();
  if (isset($_POST['isbn']) && isset($_POST['cliente'])) {
	$libro = Libro::getLibroById($_POST['isbn']);
	if ($_POST["cliente"]==$_SESSION["user"]) {
		$libro->devuelve();
		header("Location: index.php");
	}else{
		include '../View/error.php';
	}
    
  }


?>
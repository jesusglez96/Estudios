<?php 
  require_once '../Model/Libro.php';
  session_start();
  if (isset($_POST['isbn'])) {
	$libro = Libro::getLibroById($_POST['isbn']);
    $libro->alquila($_SESSION["user"]);
  }
  header("Location: index.php");
?>
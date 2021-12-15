<?php 
  require_once '../Model/Libro.php';
  if (isset($_POST['isbn']) && isset($_POST['cliente'])) {
	$libro = Libro::getLibroById($_POST['isbn']);
    $libro->alquila($_POST['cliente']);
  }
  header("Location: index.php");
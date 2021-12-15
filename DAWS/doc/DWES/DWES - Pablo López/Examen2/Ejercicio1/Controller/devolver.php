<?php 
  require_once '../Model/Socio.php';
  if (isset($_POST['id'])) {
	$socio = Socio::getSocioById($_POST['id']);

	$socio->sumaPuntos();
	
	header("Location: index.php");
    
  }
  
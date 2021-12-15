<?php 
    session_start();
     require_once '../Model/Socio.php';
    if (isset($_POST['id'])) {
	    $socio = Socio::getSocioById($_POST['id']);
	    $socio->sumaPuntos();
        $_SESSION["operaciones"]++;
	header("Location: index.php");
    
  }
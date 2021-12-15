<?php 
require_once '../Model/Socio.php';
session_start();
    $socio = Socio::getSocioById($_POST['id']);
    $socio->delete();
    $_SESSION["operaciones"]++;
    header("Location: index.php");
?>
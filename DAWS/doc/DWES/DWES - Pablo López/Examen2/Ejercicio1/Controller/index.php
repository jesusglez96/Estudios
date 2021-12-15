<?php
session_start();
require_once '../Model/Libro.php';
//comprueba si el usuario ha iniciado sesion
if (!isset($_SESSION['user'])) {
    if (isset($_POST['user'])) {
        $_SESSION['user']=$_POST['user'];
        header("refresh: 0;");
    }else{
        include '../View/acceso.php';
    }
}else{
    // Obtiene todos los libros
    $data['libros'] = Libro::getLibros();
    $data['user']=$_SESSION['user'];

    //carga la vista con el listado de libros
    include '../View/listadoLibros.php';    
}



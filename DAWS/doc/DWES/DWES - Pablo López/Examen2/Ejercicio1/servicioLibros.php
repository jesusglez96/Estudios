<?php
require_once '../Model/Libro.php';
if (isset($_REQUEST['titulo']) || isset($_REQUEST['estado']) ) {
    if (isset($_REQUEST['titulo'])) {
        $libros = Libro::getLibrosFiltroTitulo($_REQUEST['titulo']);
    }else if (isset($_REQUEST['estado'])) {
        if ($_REQUEST['estado']!="libre" && $_REQUEST['estado']!="alquilado") {
            $devolver[0]=['codigo' => 2];
        }else {
            $libros = Libro::getLibrosFiltroEstado($_REQUEST['estado']);            
        }
    }
    if (isset($libros)) {
        if (count($libros)==0) {
            $devolver[0]=['codigo' => 1];
        }else{
            $devolver[0]=['codigo' => 0];
            foreach ($libros as $libro) { 
                $devolver[] = ['isbn' => $libro->getIsbn(), 'titulo' => $libro->getTitulo()];
            }
        }        
    }
}
echo json_encode($devolver);

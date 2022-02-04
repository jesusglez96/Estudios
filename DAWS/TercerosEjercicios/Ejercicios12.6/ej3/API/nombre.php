<?php
require_once "./model/Producto.php";

$nom = $_REQUEST["nom"];

$productos = Producto::getProductosNombre($nom);

$response = [];

foreach ($productos as $producto) {
    $response[] = ["nombre" => $producto->getNombre(), "precio" => $producto->getPrecio(), "img" => "https://ruizgijon.ddns.net/gonzalezj/php/12_6/ej3/images/" . $producto->getImagen()];
}
header("Content-type: json");
echo json_encode($response);

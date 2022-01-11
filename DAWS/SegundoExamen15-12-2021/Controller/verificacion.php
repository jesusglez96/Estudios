<?php
session_start();

$user = ucfirst(strtolower($_REQUEST["usuario"]));

$file = file("../Model/usuarios.txt");
$arrUsers = [];
$encontrado = false;
foreach ($file as $usuario) {
    $arrUsers[] = explode(",", $usuario);
}
foreach ($arrUsers as $usuario) {
    if ($usuario[0] == $user) {
        $_SESSION['usuario']["nombre"] = $usuario[0];
        $_SESSION['usuario']['permiso'] = trim($usuario[1]);
        setcookie("usuario", serialize($_SESSION['usuario']), time() + 60 * 60 * 24 * 30 * 12 * 3);
        $encontrado = true;
    }
}
if ($encontrado)
    header("location: principal.php");
else
    header("location: index.php");

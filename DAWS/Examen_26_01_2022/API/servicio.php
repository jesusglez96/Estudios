<?php
require_once 'model/Cuentas.php';
require_once 'model/Articulos.php';
$codEstado = 400;
$mensaje = 'Solicitud incorrecta';
$metodo = $_SERVER['REQUEST_METHOD'];
// var_dump($metodo);
if ($metodo == 'GET') {
    // $titulo = "";
    // $likes = 0;
    if (isset($_REQUEST["titulo"])) $titulo = $_REQUEST["titulo"];
    else $titulo = "";
    if (isset($_REQUEST["likes"])) $likes = $_REQUEST["likes"];
    else $likes = 0;

    $consulta = Articulos::getArticulos($titulo, $likes);

    if (count($consulta) > 0) {
        foreach ($consulta as $articulo) {
            $devolver['articulos'][] = ['titulo' => $articulo->getTitulo(), 'categoria' => $articulo->getCategoria(), "fecha" => $articulo->getFecha(), 'contenido' => $articulo->getContenido(), 'likes' => intval($articulo->getLikes())];
        }
        $codEstado = 200;
        $mensaje = "Consulta correcta";
    } else {
        $codEstado = 400;
        $mensaje = 'Solicitud incorrecta';
    }
} else if ($metodo == 'POST') {
    if (isset($_REQUEST["token"]) && isset($_REQUEST["contenido"])) {
        $token = $_REQUEST["token"];
        $usuario = Cuentas::getCuentaByToken($token);

        if ($usuario->getEstado() == "activa") {
            $consulta = Articulos::getArticulosByContenido($_REQUEST["contenido"]);
            if (count($consulta) > 0) {
                foreach ($consulta as $articulo) {
                    $devolver['articulos'][] = ['titulo' => $articulo->getTitulo(), 'categoria' => $articulo->getCategoria(), "fecha" => $articulo->getFecha(), 'contenido' => $articulo->getContenido(), 'likes' => intval($articulo->getLikes())];
                }
            } else {
                $codEstado = 400;
                $mensaje = 'Solicitud incorrecta';
            }
            $usuario->setConsultas($usuario->getConsultas() - 1);
            $usuario->update();
        } else {
            $mensaje = "CUENTA BLOQUEADA";
            $codEstado = 400;
        }
    } else if (isset($_REQUEST["new_nombre"])) {
        // $
        // do{
        //     $token = "";
        //     for ($i=0; $i < 10; $i++) { 
        //         $token .= $i; 
        //     }
        //     // $token .= UConverter:: idn_to_ascii(rand(65, 90));
        // }while ($token ) {
        //     # code...
        // }
        // 
    } else if (isset($_REQUEST["token"])) {
        $usuario = Cuentas::getCuentaByToken($_REQUEST["token"]);

        if ($usuario->getEstado() == "bloqueada") {
            $usuario->setEstado("activa");
            $usuario->setConsultas(5);
            $usuario->update();
        } else {
            $mensaje = "CUENTA ACTIVA";
            $codEstado = 504;
        }
    }
}

$devolver['mensaje'] = $mensaje;
$devolver['codEstado'] = $codEstado;
setCabecera($codEstado, $mensaje);
echo json_encode($devolver);

function setCabecera($codEstado, $mensaje)
{
    //Si usamos la funcion setCabecera y establecemos en header un codigo distinto de 200 (status OK) provocará un error en el cliente, 
    //por eso es mejor tratar el error en la respuesta devuelta en el array $devolver y el cliente pueda analizar el mensaje
    header("HTTP/1.1 $codEstado $mensaje");
    header("Content-Type: application/json;charset=utf-8");
}

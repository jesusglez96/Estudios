<?php
$url = "http://localhost//DAWS/Examen_26_01_2022/API/servicio.php";
if (isset($_GET['consulta_normal'])) {
    $parametros = '?titulo=';
    $titulo = (isset($_REQUEST["titulo"])) ? $_REQUEST["titulo"] : "";
    $parametros .= "
    ";
    if (isset($_REQUEST["likes"])) $parametros .= "likes=" . $_REQUEST["likes"];
    $data = file_get_contents($url . $parametros);
    echo $data;
    // echo "<h1>GRUPO: " . $_POST['grupo'] . "</h1>";
    // hacerPeticion($datos);

}
//else if (isset($_POST['consulta_premium'])) {
//     $parametros = "?token=" . $_POST['token'] . '&contenido=' .
//         $_POST['token'];
//     $data = file_get_contents($url . $parametros);
//     echo "<h1>Nombres que contienen: \"" . $_POST['nombre'] . "\"</h1>";
//     mostrarAlumnos(json_decode($data));
// } else if (isset($_POST['filtraAsignatura'])) {
//     $parametros = "?matricula=" . $_POST['matricula'] . '&tipo=asignaturas';
//     $data = file_get_contents($url . $parametros);
//     echo "<h1>Matrícula del alumno: " . $_POST['matricula'] . "</h1>";
//     mostrarAsignaturas(json_decode($data));
else if (isset($_POST['consulta_premium'])) {
    // $datos = ["token" =>  $_REQUEST['token'], "contenido" =>  $_REQUEST['contenido']];
    $parametros = "?token=" . $_POST['token'] . '&contenido='
        . $_POST['contenido'];
    $data = file_get_contents($url . $parametros);
    // $data = hacerPeticion($datos, "POST", $url);
    header("Content-type: json");
    echo $data;
    // mostrarEstado(json_decode($data));
}
//else if (isset($_POST['borrar'])) {
//     $datos = ["matricula" =>  $_REQUEST['matricula']];
//     $data = hacerPeticion($datos, "DELETE", $url);
//     mostrarEstado(json_decode($data));
// } else if (isset($_POST['cambiaGrupo'])) {
//     $datos = ["matricula" =>  $_REQUEST['matricula'], "grupo" =>  $_REQUEST['grupo']];
//     $data = hacerPeticion($datos, "PUT", $url);
//     mostrarEstado(json_decode($data));
// }
// function mostrarEstado($resultado)
// {
//     echo "STATUS: " . $resultado->codEstado;
//     echo "<br>" . $resultado->mensaje;
//     echo "<br><h4><a href='index.php'>VOLVER</a></h4>";
// }
// function mostrarAlumnos($resultado)
// {
//     if ($resultado->codEstado == 200) {
//         echo "<table border='1'><tr><th>Nombre</th><th>Apellidos</th><th>Matricula</th></tr>";
//         foreach ($resultado->alumnos as $alumno) {
//             echo "<tr><td>" . $alumno->nombre . "</td>";
//             echo "<td>" . $alumno->apellidos . "</td>";
//             echo "<td>" . $alumno->matricula . "</td></tr>";
//         }
//         echo "</table>";
//         echo "<br><h4><a href='index.php'>VOLVER</a></h4>";
//     } else {
//         mostrarEstado($resultado);
//     }
// }
// function mostrarAsignaturas($resultado)
// {
//     if ($resultado->codEstado == 200) {
//         echo "<table border='1'><tr><th>Código</th><th>Asignatura</th></tr>";
//         foreach ($resultado->asignaturas as $asignatura) {
//             echo "<tr><td>" . $asignatura->codigo . "</td>";
//             echo "<td>" . $asignatura->nombre . "</td></tr>";
//         }
//         echo "</table>";
//         echo "<br><h4><a href='index.php'>VOLVER</a></h4>";
//     } else {
//         mostrarEstado($resultado);
//     }
//     echo "<br><h4><a href='index.php'>VOLVER</a></h4>";
// }
function hacerPeticion($datos, $metodo, $url)
{
    $opciones = [
        "http" => [
            "header" => "Content-type: application/x-www-form-urlencoded\r\n",
            "method" => $metodo,
            "content" => http_build_query($datos) # Agregar el contenido del formulario definido anteriormente en $datos
        ],
    ];
    $contexto = stream_context_create($opciones);
    $data = file_get_contents($url, false, $contexto);
    return $data;
}

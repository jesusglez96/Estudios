<?php
function retornarConexion()
{
    $con = mysqli_connect("localhost", "root", "", "examen_angular");
    return $con;
}

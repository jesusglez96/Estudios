<?php
function tiempo($ciudad)
{
    $datos = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=" . $ciudad . ",
            Spain&units=metric&appid=db07a2dc62b855fe1f53205b91221081");
    $tiempo = json_decode($datos);
    return $tiempo;
}

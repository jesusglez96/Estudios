<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marca</title>
</head>
<body>
    <!--<img src="imagenes/logo.svg" alt="logo" height="100px" width="100px"><br>-->

    <form action="#" method="post">
        Seleccionar liga:
        <select name="liga" id="liga">
            <option value="premier">Premier League</option>
            <option value="laliga">Liga Santander</option>
            <option value="serie">Serie A</option>
        </select>
        <input type="submit" value="Enviar"  name="liga">
    </form>
    <hr>
    <form action="#" method="post">
        <input type="submit" value="Clasificación" name="clasificacion">
        <input type="submit" value="Pichichi" name="goles">
    </form>
    
    <?php 
        if (isset($_REQUEST["clasificacion"])) {
            $uri = 'http://api.football-data.org/v2/competitions/2014/standings';
            $reqPrefs['http']['method'] = 'GET';
            $reqPrefs['http']['header'] = 'X-Auth-Token: d5c39f0b831b452dbc8b46909717a9fb';
            $stream_context = stream_context_create($reqPrefs);
            $response = file_get_contents($uri, false, $stream_context);
            $equipos = json_decode($response);
            //print_r($equipos);
            for ($i=0; $i<20 ; $i++) { 
                echo ($i+1).". ".$equipos->standings[0]->table[$i]->team->name."<br>";
            }
        }

        if (isset($_REQUEST["goles"])) {
            $uri = 'http://api.football-data.org/v2/competitions/2014/scorers';
            $reqPrefs['http']['method'] = 'GET';
            $reqPrefs['http']['header'] = 'X-Auth-Token: d5c39f0b831b452dbc8b46909717a9fb';
            $stream_context = stream_context_create($reqPrefs);
            $response = file_get_contents($uri, false, $stream_context);
            $goleadores = json_decode($response);
            //print_r($response);
            for ($i=0; $i<10 ; $i++) { 
                echo ($i+1).". ".$goleadores->scorers[$i]->player->name." | Goles: ".$goleadores->scorers[$i]->numberOfGoals."<br>";
            }
        }
    
    ?>
</body>
</html>
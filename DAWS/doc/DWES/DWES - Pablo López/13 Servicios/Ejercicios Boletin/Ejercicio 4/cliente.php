<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        Numero de cartas: <input type="number" placeholder="Introduce el número de cartas que quieres sacar:" name="count">
        <br><br>
        <input type="submit" value="Enviar" name="enviar"><br><br>
    </form>

    <?php 
    
        if (isset($_POST["enviar"])) {

            if(isset($_POST["count"])) {

                $conversion = file_get_contents("http://localhost/DWES%20-%20Pablo%20L%C3%B3pez/13%20Servicios/Ejercicios%20Boletin/Ejercicio%204/servidor.php?c=".$_POST['count']);

                $respuesta = json_decode($conversion);
                    if ($respuesta->error==0) {
                        foreach ($respuesta->cartas as $carta) {
                            echo $carta."<br>";
                        }
                    } else {
                        echo "Codigo de error: $respuesta->error <br> Información: $respuesta->errorMsg";
                    }

            }
        }
    
    ?>
</body>
</html>
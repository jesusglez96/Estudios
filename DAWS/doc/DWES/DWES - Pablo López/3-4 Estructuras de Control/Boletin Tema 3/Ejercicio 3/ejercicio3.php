<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día
de la semana.-->

    <?php 
        $num = $_GET["num"];

        switch($num){
            case 1:
                echo "Lunes";
            break;
            case 2:
                echo "Martes";
            break;
            case 3:
                echo "Miercoles";
            break;
            case 4:
                echo "Jueves";
            break;
            case 5:
                echo "Viernes";
            break;
            case 6:
                echo "Sábado";
            break;
            case 7:
                echo "Domingo";
            break;

        }
    ?>

<br>
    <input type="button" onclick="history.back()" name="volver" value="Volver">
</body>
</html>
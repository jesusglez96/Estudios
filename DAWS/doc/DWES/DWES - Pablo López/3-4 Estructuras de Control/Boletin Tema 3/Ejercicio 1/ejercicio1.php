<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $dia = $_GET["dia"];
        $dia = strtolower($dia);

        switch ($dia){
            case "lunes":
                echo "El Lunes a primera hora tienes DWEC";
                break;
            case "martes":
                echo "El Martes a primera hora tienes DIW";
                break;
            case "miercoles":
                echo "El Miercoles a primera hora tienes EIE";
                break;
            case "jueves":
                echo "El Jueves a primera hora tienes DWES";
                break;
            case "viernes":
                echo "El Viernes a primera hora tienes LC";
                break;
            default:
                echo "Introduce un día de la semana válido (L-V)";
                break;
            }   
    ?>
    <br>
    <input type="button" onclick="history.back()" name="volver" value="Volver">
</body>
</html>
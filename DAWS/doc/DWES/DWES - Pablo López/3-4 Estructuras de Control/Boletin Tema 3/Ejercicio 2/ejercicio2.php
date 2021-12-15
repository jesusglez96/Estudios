<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas
tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5.
respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado-->

    <?php 
        $hora = $_GET["hora"];

        if ($hora>=6 && $hora<13){
            echo "Buenos dias!!!";
        } else if ($hora>=13 && $hora<21){
            echo "Buenas tardes!!!";
        } else {
            echo "Buenas noches!!!";
        }

    ?>
    <br>
    <input type="button" onclick="history.back()" name="volver" value="Volver">
</body>
</html>
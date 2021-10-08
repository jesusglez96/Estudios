<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina personalizada</title>
    <style>
        @import url(
            <?php
            switch ($_POST["letra"]) {
                case 'Roboto':
                    $fuente = "'Roboto', sans-serif";
                    echo "'https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap'";
                    break;

                case 'Stick No Bills':
                    $fuente = "'Stick No Bills', sans-serif";
                    echo "'https://fonts.googleapis.com/css2?family=Stick+No+Bills:wght@300&display=swap'";
                    break;

                case 'Caramel':
                    $fuente = "'Caramel', cursive";
                    echo "'https://fonts.googleapis.com/css2?family=Caramel&display=swap'";
                    break;
                
                default:
                    # code...
                    break;
            }
            ?>
        );
        
        .padre{
            background-color: <?php echo $_POST["bgc"] ?>;
            font-family: <?php echo $fuente ?> ;
        }

        .texto{
            text-align: <?php echo $_POST["alineacion"] ?>;
        }

        img{
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="padre">
        <div class="texto">
            <h1>Ejercicio 3</h1>
            <p>Esta es una página personalizada</p>
            <p>
                Lorem fistrum se calle ustée papaar papaar ese hombree qué dise usteer diodenoo ese hombree hasta luego Lucas está la cosa muy malar apetecan. Pecador qué dise usteer te voy a borrar el cerito caballo blanco caballo negroorl no puedor sexuarl diodeno sexuarl ahorarr ahorarr. Fistro por la gloria de mi madre de la pradera no puedor diodeno. Diodeno a gramenawer se calle ustée pecador. Quietooor ese hombree me cago en tus muelas diodeno qué dise usteer a peich está la cosa muy malar qué dise usteer hasta luego Lucas. Ese pedazo de pupita al ataquerl torpedo hasta luego Lucas diodeno ahorarr. Amatomaa amatomaa se calle ustée torpedo ese pedazo de a wan. Papaar papaar se calle ustée a peich hasta luego Lucas. Quietooor pupita no te digo trigo por no llamarte Rodrigor no puedor torpedo diodeno.
            </p>
        </div>
        <div>
            <img src="<?php echo $_POST["imagen"] ?>" alt="">
        </div>
    </div>
</body>
</html>

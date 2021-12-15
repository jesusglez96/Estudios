<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $nota3 = $_GET["nota3"];

        $media = ($nota1+$nota2+$nota3)/3;

        switch ($media){
            case 0:
            case 1:
            case 2:
            case 3:
            case 4:
                echo "Nota media: ", $media, "<br>Nota del boletín: INSUFICIENTE";
                break;
            case 5:
                echo "Nota media: ",$media, "<br>Nota del boletín: SUFICIENTE";
                break;
            case 6: 
                echo "Nota media: ",$media, "<br>Nota del boletín: BIEN";
            break;
            case 7:
            case 8:
                echo "Nota media: ", $media, "<br>Nota del boletín: NOTABLE";
            break;
            case 9:
            case 10:
                echo "Nota media: ",$media, "<br>Nota del boletín: SOBRESALIENTE";
            break;
        }

    ?>
</body>
</html>
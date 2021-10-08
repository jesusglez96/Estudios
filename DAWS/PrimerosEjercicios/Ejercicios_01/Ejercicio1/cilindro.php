<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cilindro</title>
    <style>
        .padre{
            text-align: center;
            background-color: whitesmoke;
        }
        .hijo{
            margin: 10px;
            padding: auto;
            vertical-align: middle;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="padre">
        <div class="hijo">
            <?php 
                $altura = $_GET['altura'];
                $diametro = $_GET['diametro'];

                $volumen = pi()*$altura*$diametro;
                
                echo "El volumen es igual a $volumen";
            ?>
        </div>
        <div class="hijo">
            <img src="cilindro.png" alt="" srcset="">
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tiempo</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mukta:wght@300&display=swap');

        body{
            font-family: 'Mukta', sans-serif;
            background-color: antiquewhite;
        }

        header{
            background: linear-gradient(to bottom, grey, antiquewhite);
            text-align: center;
        }

        section{
            width: 50%;
            text-align: center;
            float: left;
        }

        aside{
            width: 50%;
            float: right;
        }
        img{
            width: 300px;
            height: 400px;
        }

        footer{
            background: linear-gradient(to bottom, antiquewhite, grey);
            color: blue;
            text-align: center;
            clear: both;
        }
    </style>
</head>
<body>
    <header>
        <h1>Calculadora de tiempo</h1>
    </header>
    <section>
        <?php 
            $altura = $_POST['altura'];
            $diametro = $_POST['diametro'];

            $volumen = pi()*$altura*$diametro;
            
            $tiempo = explode(".", (string)($volumen / $_POST["caudal"]) / 60);

            $tiempo[1] = substr($tiempo[1], 0, 2); 

            echo "<p>Tardarás en llenar el cilindro $tiempo[0] horas y $tiempo[1] minutos</p>"
        ?>
    </section>
    <aside>
        <img src="aceite2.png" alt="" srcset="">
    </aside>
    <footer>
        <h4>¿Ves algún problema?</h4>
        <a href="mailto:jesus.gonzalez-nieto@iesruizgijon.com">Pincha aquí y enviame un correo</a>
    </footer>
</body>
</html>
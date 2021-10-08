<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
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

        input{
            width: 70px;
        }

        input:focus{
            background-color: yellow;
            color: red;
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
    <section class="contenido">
        <form action="fabrica.php" method="post">
            <p>
                <label for="diametro">Diametro: </label>
                <input type="number" name="diametro" id="diametro">
            </p>
            <p>
                <label for="altura">Altura: </label>
                <input type="number" name="altura" id="altura">
            </p>
            <p>
                <label for="caudal">Caudal: </label>
                <input type="number" name="caudal" id="caudal">
            </p>
            <p>
                <button type="submit">Calcular</button>
            </p>
        </form>
    </section>
    <aside>
        <img src="aceite1.png" alt="" srcset="">
    </aside>
    <footer>
        <h4>¿Ves algún problema?</h4>
        <a href="mailto:jesus.gonzalez-nieto@iesruizgijon.com">Pincha aquí y enviame un correo</a>
    </footer>
</body>
</html>
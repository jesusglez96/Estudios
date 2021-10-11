<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }

        /* fieldset {
            border: none;
        } */

        .formulario {
            border: 1px solid black;
            display: inline-block;
        }
    </style>
</head>

<body>
    <!-- Vamos a realizar una página para generar parejas aleatorias según su sexo y orientación
    sexual. Para ello en una primera página pediremos de manera reiterada el nombre, sexo
    (h o m) y orientación (heterosexual, homosexual o bisexual) de personas, que se irán
    almacenando en un array. Se dispondrá además, de un botón para pasar a la segunda
    página que permite generar las parejas aleatorias con las personas introducidas. Esta
    segunda página debe contener tres botones para generar una pareja aleatoria de los
    siguientes tipos:
    -Heterosexual: Obtendrá aleatoriamente una primera persona de cualquier sexo y
    orientación heterosexual, que unirá con una segunda persona de distinto sexo que sea
    heterosexual o bisexual.
    -Homosexual: Obtendrá aleatoriamente una primera persona de cualquier sexo y
    orientación homosexual, que unirá con otra persona del mismo sexo y orientación.
    -Bisexual: Obtendrá aleatoriamente una primera persona de cualquier sexto y orientación
    bisexual, que unirá con otra persona que sea compatible, el perfil incompatible sería
    homosexual de distinto sexo o heterosexual del mismo sexo. -->

    <h1>Cupineitor</h1>
    <hr>

    <h2>Creador de parejas</h2>
    <div class="formulario">
        <h3>Introduce las personas</h3>

        <?php
        if (isset($_REQUEST["arPersonas"])) {
            $personas = unserialize(base64_decode($_REQUEST["arPersonas"]));
        } else {
            $personas = [];
        }

        if (isset($_REQUEST["nombre"])) {
            $personas[] = [$_REQUEST["nombre"], $_REQUEST["sexo"], $_REQUEST["gusto"]];
        }

        $arPersonas = base64_encode(serialize($personas));
        ?>
        <form action="index.php" method="post">
            <input type="hidden" name="arPersonas" value="<?= $arPersonas ?>">

            <label for="nombre">Nombre:
                <input type="text" name="nombre" id="nombre">
            </label>

            <p>Sexo: </p>

            <input type="radio" name="sexo" id="hombre" value="hombre">
            <label for="hombre"> Hombre </label>

            <input type="radio" name="sexo" id="mujer" value="mujer">
            <label for="mujer"> Mujer</label>

            <p>Orientación sexual</p>

            <input type="radio" name="gusto" id="hetero" value="hetero">
            <label for="hetero"> Heterosexual</label>

            <input type="radio" name="gusto" id="homo" value="homo">
            <label for="homo"> Homosexual</label>

            <input type="radio" name="gusto" id="bi" value="bi">
            <label for="bi"> Bisexual </label>

            <p>
                <input type="submit" value="Añadir integrante">
            </p>
        </form>

    </div>

    <hr>

    <form action="cupineitor.php" method="post">
        <input type="hidden" name="arPersonas" value="<?= $arPersonas ?>">
        <input type="submit" value="Cupinator en acción">
    </form>

</body>

</html>
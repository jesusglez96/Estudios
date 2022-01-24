<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../view/css/header.css">
    <link rel="stylesheet" href="./../view/css/default.css">
    <link rel="stylesheet" href="./../view/css/recetas.css">
    <link rel="stylesheet" href="./../view/css/fontawesome-all.min.css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <header>
            <h1><i class="far fa-sun"></i> Nutricionista Jesus</h1>
        </header>
        <nav>
            <form action="#" method="post">
                <input type="submit" name="enlace" value="recetas">
                <input type="submit" name="enlace" value="analisis">
            </form>
        </nav>
    </div>

    <main>
        <div class="principio">
            <h2>Recetario</h2>
            <article class="formulario">
                <form action="./../controller/busca_receta.php" method="post">
                    <label for="food">Ingredientes: </label>
                    <input type="text" name="food" id="food">
                    <input type="submit" value="Buscar">
                </form>
            </article>

        </div>

        <?php
        if (isset($_SESSION["recetas"])) {
            // echo "<pre>";
            // var_dump($_SESSION["recetas"]);
            // echo "</pre>";

        ?>
            <article class="recetario">
                <h3>Recetas con <?= $_SESSION["recetas"]->q ?></h3>

                <?php
                foreach ($_SESSION["recetas"]->hits as $key => $receta) {
                ?>
                    <div class="receta">
                        <h4 class="receta__nombre"><?= $receta->recipe->label ?></h4>
                        <div class="receta__img">
                            <img src="<?= $receta->recipe->image ?>" alt="">
                        </div>
                        <div class="receta__ingredientes">
                            <h5>Ingredientes</h5>
                            <?php
                            for ($i = 0; $i < count($receta->recipe->ingredientLines); $i++) {
                                echo "<p>" . $receta->recipe->ingredientLines[$i] . "</p>";
                            }
                            ?>
                        </div>
                        <div class="receta__info">
                            <div class="info__alergias">
                                <h5>Alergias</h5>
                                <?php
                                for ($i = 0; $i < count($receta->recipe->cautions); $i++) {
                                    echo "<p>" . $receta->recipe->cautions[$i] . "</p>";
                                }
                                ?>

                                <h5>Información nutricional</h5>
                                <?php

                                echo "<p>Calorias: " . round($receta->recipe->totalNutrients->ENERC_KCAL->quantity / $receta->recipe->yield, 2) . " " . $receta->recipe->totalNutrients->ENERC_KCAL->unit . "</p>";
                                echo "<p>Grasas: " . round($receta->recipe->totalNutrients->FAT->quantity / $receta->recipe->yield, 2) . " " . $receta->recipe->totalNutrients->FAT->unit . "</p>";
                                echo "<p>Carbohidratos: " . round($receta->recipe->totalNutrients->CHOCDF->quantity / $receta->recipe->yield, 2) . " " . $receta->recipe->totalNutrients->CHOCDF->unit . "</p>";
                                echo "<p>Carbohidratos: " . round($receta->recipe->totalNutrients->PROCNT->quantity / $receta->recipe->yield, 2) . " " . $receta->recipe->totalNutrients->PROCNT->unit . "</p>";
                                echo "<p>Carbohidratos: " . round($receta->recipe->totalNutrients->CHOLE->quantity / $receta->recipe->yield, 2) . " " . $receta->recipe->totalNutrients->CHOLE->unit . "</p>";

                                ?>

                            </div>
                            <p class="receta__creador">From: <b><a href="<?= $receta->recipe->url ?>"><?= $receta->recipe->source ?></a></b></p>
                        </div>

                    </div>

            <?php
                }
            }
            ?>
            </article>

    </main>

</body>

</html>
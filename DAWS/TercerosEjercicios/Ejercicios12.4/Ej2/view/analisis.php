<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../view/css/header.css">
    <link rel="stylesheet" href="./../view/css/default.css">
    <link rel="stylesheet" href="./../view/css/analisis.css">
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
            <h2>Analisis nutricional</h2>
            <article class="formulario">
                <form action="./../controller/busca_alimento.php" method="post">
                    <label for="food">Ingredientes: </label>
                    <input type="text" name="food" id="food">
                    <input type="submit" value="Buscar">
                </form>
            </article>

        </div>

        <?php
        if (isset($_SESSION["analisis"])) {

        ?>
            <h3>Analisis nutricional: <?= $_SESSION["analisis"]->text ?></h3>
            <article class="analisis">

                <?php
                foreach ($_SESSION["analisis"]->parsed as $key => $analisis) {
                ?>
                    <div class="alimento">
                        <div class="alimento__img">
                            <img src="<?= $analisis->food->image ?>" alt="">
                        </div>
                        <h4><?= $analisis->food->label ?></h4>

                        <p>Calorias: <?= $analisis->food->nutrients->ENERC_KCAL ?> kcal</p>
                        <p>Proteinas: <?= $analisis->food->nutrients->PROCNT ?> g</p>
                        <p>Grasas: <?= $analisis->food->nutrients->FAT ?> g</p>
                        <p>Carbohidratos: <?= $analisis->food->nutrients->CHOCDF ?> g</p>
                        <p>Fibra: <?= $analisis->food->nutrients->FIBTG ?> g</p>


                    </div>
                <?php
                }
                ?>

            <?php
        }

            ?>
            </article>

    </main>

</body>

</html>
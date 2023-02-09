<!-- 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

    L'e-commerce vende prodotti per animali.
    I prodotti sono categorizzati, le categorie sono Cani o Gatti.
    I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).


-->

<?php

require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Kennel.php';
require_once __DIR__ . '/models/Toy.php';
require_once __DIR__ . '/models/Category.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--Link Bootstrap 5.3.0-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--Link Css-->
    <link rel="stylesheet" href="./styles/style.css">

</head>

<body>
    <header></header>

    <main class="container-lg">
        <?php
        $cane = new Category("cane");
        // $product = new Product('nome', 3.3, 'cane');
        $croccantini = new Food('special food', 3.3, $cane, '1/3/2023', ['pesce', 'carne']);
        // $kennel = new Kennel('nome', 3.3, 'cane', ['stoffa'], 'xl');
        // $cordina = new Toy('nome', 3.3, 'cane', ['nylon'], 'corda');
        // var_dump($product, $croccantini, $kennel, $cordina);


        ?>


        <div class="card" style="width: 18rem;">
            <!-- <img src="..." class="card-img-top" alt="Non ancora inserita"> -->
            <div class="card-body">
                <h5 class="card-title text-center"><?php echo $croccantini->getName() ?></h5>
                <p class="card-text">
                    <span class="fw-bold">
                        Prezzo:
                    </span>
                    <span>
                        <?php echo $croccantini->getPrice() ?>
                    </span>
                </p>

                <p class="card-text">
                    <span class="fw-bold">
                        Categoria:
                    </span>
                    <span>
                        <?php echo $cane->getName() ?>
                    </span>
                </p>

                <p class="card-text">
                    <span class="fw-bold">
                        Data di scadenza:
                    </span>
                    <span>
                        <?php echo $croccantini->getExpiringDate() ?>
                    </span>
                </p>

                <p class="card-text">
                    <span class="fw-bold">
                        Ingredienti:
                    </span>
                    <span>
                        <?php echo implode(", ", $croccantini->getIngredients()); ?>
                    </span>
                </p>


                <a href="#" class="btn btn-primary">Acquista</a>
            </div>
        </div>
    </main>

</body>

</html>
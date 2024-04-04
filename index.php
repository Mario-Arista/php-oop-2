<?php

require 'db.php';

?>

<!DOCTYPE html>
<html lang="it-IT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP VOL. 2</title>

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS solo se mi servirà-->
    <style>
        .product-poster {
            object-fit: cover;
        }

    </style>

</head>

<body class="bg-light">

    <header class="container-fluid bg-dark">
        <h1 class="text-white fs-1 p-3 text-center">Negozio per animali</h1>
    </header>

    <div class="container py-5">

        <?php 
        
        if ($error) {
            ?>
            <div class="alert alert-dark" role="alert">
                <?= $error ?>
            </div>
            <div class="alert alert-dark" role="alert">
                <?= $error2 ?>
            </div>
            <div class="alert alert-dark" role="alert">
                <?= $error3 ?>
            </div>
            <div class="alert alert-dark" role="alert">
                <?= $error4 ?>
            </div>
            <?php
        }

        ?>
    </div>
    
    <main class="container-fluid"> 

        <div class="row w-75 m-auto pt-4 pb-4">
            <?php foreach($products as $product) { ?>

            <div class="col-4 position position-relative border border-1 border-black">
                <div class="d-flex flex-column justify-content-start align-items-center">

                    <!-- Immagine prodotto -->
                    <div>
                        <img class="product-poster img-fluid" src="<?php echo $product->image ?>" alt="<?php echo $product->name ?>">
                    </div>

                    <!-- Se disponibile prodotto -->
                    <div>
                        <strong class="text-white bg-dark p-2"><?= $product->isAvailable ? "Disponibile" : "Non Disponibile" ?></strong>
                    </div>

                    <!-- Nome prodotto -->
                    <div class="mt-2">
                        <strong class="text-dark">Nome: <?php echo $product->name ?></strong>
                    </div>

                    <!-- Prezzo prodotto -->
                    <div>
                        <strong class="text-dark">Prezzo: <?php echo $product->price ?>€</strong>
                    </div>

                    <!-- Dettagli prodotto -->
                    <div class="mt-4 mb-4">
                        <strong class="text-dark d-flex flex-column align-items-center">
                        <?php

                        if($product instanceof Food) {
                            echo '<div>Peso: ' . $product->weight . 'kg</div>' ;
                            echo '<div>Ingredienti: ' . $product->ingredients . '</div>' ;
                            echo '<div>Data di scadenza: ' . $product->expireDate . '</div>' ;

                        } else if($product instanceof Toy) {

                            echo '<div>Materiale: ' . $product->material . '</div>' ;
                            echo '<div>Colori: ' . $product->colors . '</div>' ;
                            echo '<div>Size: '. $product->size . '</div>';


                        } else if($product instanceof Kennel) { 

                            echo '<div>Materiale: ' . $product->material . '</div>' ;
                            echo '<div>Colori: ' . $product->colors . '</div>' ;
                            echo '<div>Size: '. $product->size . '</div>';

                        }

                        ?>
                        </strong>
                    </div>

                    <!-- Tipo prodotto -->
                    <div>
                        <strong class="position position-absolute bottom-0 end-0 text-white bg-dark p-2"><?php echo $product->type ?></strong>
                    </div>

                    <!-- Icona prodotto -->
                    <div>
                        <strong class="position position-absolute top-0 end-0">
                            <?php echo  $product->category->icon ?>
                        </strong>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
        
    </main>


    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
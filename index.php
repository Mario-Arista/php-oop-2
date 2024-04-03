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


    </style>

</head>

<body class="bg-light">

    <header class="container-fluid bg-dark">
        <h1 class="text-white fs-1 p-3 text-center">Negozio per animali</h1>
    </header>
    
    <main class="container-fluid"> 

        <div class="w-75 m-auto row">

            <h2 class="text-warning pt-4 pb-4">Prodotti:</h2>

            <div class='d-flex flex-column justify-content-center align-items-center text-white mb-3 col-4'>
                <div>
                    <img class='img-fluid mx-auto' src='' alt=''>
                </div>
                <div class='mt-2'>
                    <strong class='text-warning'>Titolo:</strong>
                </div>
                <div>
                    <strong class='text-warning'>Lingua originale: </strong>
                <div>
                    <strong class='text-warning'>Anno di uscita: </strong>
                </div>
                <div>
                    <strong class='text-warning'>Genere: </strong>
                </div>

                <div>
                    <strong class='text-warning'>Regista: </strong>
                </div>

            </div>

        </div>
        
    </main>


     <!-- BOOTSTRAP -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
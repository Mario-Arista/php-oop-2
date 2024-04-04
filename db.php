<?php

require './Models/Product.php';
require './Models/Category.php';

require './Models/Food.php';
require './Models/Toy.php';
require './Models/Kennel.php';


// istanzio due oggetti di classe Category
$dogCategory = new Category("cane", "<i class='fa-solid fa-dog fs-2 text-white bg-dark p-2'></i>");
$catCategory = new Category("gatto", "<i class='fa-solid fa-cat fs-2 text-white bg-dark p-2'></i>");

// Primo errore aggiunto e stampato in pagina di proposito 
// Controllo per la categoria snakeCategory
try {

    // Scrivo il codice "a rischio"
    $snakeCategory = new Category("serpente", "<i class='fa-solid fa-cat fs-2 text-white bg-dark p-2'></i>");

} catch (Exception $e) {

    // mi salvo l'errore generato in una variabile che poi mi preoccuperò di mostrare in pagina
    $error = "Errore nel caricamento della categoria snakeCategory: " . $e->getMessage();

}

// istanzio tre oggetti di classe diversa (Food, Toy, Kennel)
// controllati con il try and catch
$food1 = new Food("Ultima", true, "https://static.ultima-affinity.com/catalog/8410650153186/3d-Pack/largeImage", "13.32", $dogCategory, "Cibo", 10, "Tonno, nutella", "12/24");
$toy1 = new Toy("Topino Giochino", true, "https://www.clappet.com/1828/gioco-gatto-topini-strisce-3-pz.jpg", 50.25, $catCategory, "Gioco", "Plastica", "Multicolore", "Small");
$kennel1 = new Kennel("Cuccia Cozy Kingdom", true, "https://molinopisoni.it/51845-large_default/ferplast-domus-cuccia-per-cani-in-legno-di-pino-nordico.jpg", 25000, $dogCategory, "Cuccia", "Legno, plastica", "Marrone, Beige", "Big");


// Secondo errore aggiunto e stampato in pagina di proposito 
// Controllo per il kennel2 (con prezzo sbagliato)
try {

    // Scrivo il codice "a rischio"
    $kennel2 = new Kennel("Letto Cozy Kingdom", true, "https://shop-cdn-m.mediazs.com/bilder/0/400/74696__cozy_kingdom_kuschelbett_fg_4623_0.jpg", "Pappagorgia", $dogCategory, "Cuccia", "Cotone", "Blu, Beige", "Big");

} catch (Exception $e) {

    // mi salvo l'errore generato in una variabile che poi mi preoccuperò di mostrare in pagina
    $error2 = "Errore nel caricamento del prodotto kennel2: "  . $e->getMessage();

}

// Terzo errore aggiunto e stampato in pagina di proposito 
// Controllo per il food2 (con IsAvailable false)
try {

    // Scrivo il codice "a rischio"
    $food2 = new Food("Ultima", false, "https://static.ultima-affinity.com/catalog/8410650153186/3d-Pack/largeImage", 13.32, $dogCategory, "Cibo", 10, "Tonno, nutella", "12/24");

} catch (Exception $e) {

    // mi salvo l'errore generato in una variabile che poi mi preoccuperò di mostrare in pagina
    $error3 = "Errore nel caricamento del prodotto food2: "  . $e->getMessage();

}

// Quarto errore aggiunto e stampato in pagina di proposito 
// Controllo per il food3 (peso sbagliato)
try {

    // Scrivo il codice "a rischio"
    $food3 = new Food("Ultima", true, "https://static.ultima-affinity.com/catalog/8410650153186/3d-Pack/largeImage", 13.32, $dogCategory, "Cibo", "ciao", "Tonno, nutella", "12/24");

} catch (Exception $e) {

    // mi salvo l'errore generato in una variabile che poi mi preoccuperò di mostrare in pagina
    $error4 = "Errore nel caricamento del prodotto food3: "  . $e->getMessage();

}


// creo un array con dentro i tre prodotti controllati
$products = [
    $food1,
    $toy1,
    $kennel1,

];





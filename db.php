<?php

require './Models/Product.php';
require './Models/Category.php';

require './Models/Food.php';
require './Models/Toy.php';
require './Models/Kennel.php';


// istanzio due oggetti di classe Category
$dogCategory = new Category("cane", "<i class='fa-solid fa-dog fs-2 text-white bg-dark p-2'></i>");
$catCategory = new Category("gatto", "<i class='fa-solid fa-cat fs-2 text-white bg-dark p-2'></i>");

// Controllo per la categoria snakeCategory

try {

    // Scrivo il codice "a rischio"
    $snakeCategory = new Category("serpente", "<i class='fa-solid fa-cat fs-2 text-white bg-dark p-2'></i>");

} catch (Exception $e) {

    // mi salvo l'errore generato in una variabile che poi mi preoccuperò di mostrare in pagina
    $error3 = "Errore: " . $e->getMessage();

}

// Controllo per il prodotto food1 
// Metto di proposito il prezzo scritto tra virgolette

try {

    // Scrivo il codice "a rischio"
    $food1 = new Food("Ultima", true, "https://static.ultima-affinity.com/catalog/8410650153186/3d-Pack/largeImage", "13.32", $dogCategory, "Cibo", 10, "Tonno, nutella", "12/24");

} catch (Exception $e) {

    // mi salvo l'errore generato in una variabile che poi mi preoccuperò di mostrare in pagina
    $error = "Errore: " . $e->getMessage();

}

// Controllo per il prodotto toy1
try {

    // Scrivo il codice "a rischio"
    $toy1 = new Toy("Topino Giochino", true, "https://www.clappet.com/1828/gioco-gatto-topini-strisce-3-pz.jpg", 50.25, $catCategory, "Gioco", "Plastica", "Multicolore", "Small");

} catch (Exception $e) {

    // mi salvo l'errore generato in una variabile che poi mi preoccuperò di mostrare in pagina
    $error = "Errore: " . $e->getMessage();

}

// Controllo per il prodotto kenell1
try {

    // Scrivo il codice "a rischio"
    $kennel1 = new Kennel("Letto Cozy Kingdom", true, "https://shop-cdn-m.mediazs.com/bilder/0/400/74696__cozy_kingdom_kuschelbett_fg_4623_0.jpg", 25000, $dogCategory, "Cuccia", "Cotone", "Blu, Beige", "Big");

} catch (Exception $e) {

    // mi salvo l'errore generato in una variabile che poi mi preoccuperò di mostrare in pagina
    $error = "Errore: " . $e->getMessage();

}

// Primo errore aggiuto di proposito 
// Controllo per il kennel2 (con prezzo sbagliato)
try {

    // Scrivo il codice "a rischio"
    $kennel2 = new Kennel("Letto Cozy Kingdom", true, "https://shop-cdn-m.mediazs.com/bilder/0/400/74696__cozy_kingdom_kuschelbett_fg_4623_0.jpg", "Pappagorgia", $dogCategory, "Cuccia", "Cotone", "Blu, Beige", "Big");

} catch (Exception $e) {

    // mi salvo l'errore generato in una variabile che poi mi preoccuperò di mostrare in pagina
    $error = "Errore nel caricamento del prodotto kennel2: "  . $e->getMessage();

}

// Secondo errore aggiuto di proposito e commentato
// Controllo per il food2 (con IsAvailable false)
try {

    // Scrivo il codice "a rischio"
    $food2 = new Food("Ultima", false, "https://static.ultima-affinity.com/catalog/8410650153186/3d-Pack/largeImage", 13.32, $dogCategory, "Cibo", 10, "Tonno, nutella", "12/24");

} catch (Exception $e) {

    // mi salvo l'errore generato in una variabile che poi mi preoccuperò di mostrare in pagina
    $error2 = "Errore nel caricamento del prodotto food2: "  . $e->getMessage();

}

// creo un array con dentro i tre prodotti
$products = [
    $food1,
    $toy1,
    $kennel1,

];





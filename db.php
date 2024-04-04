<?php

require './Models/Product.php';
require './Models/Category.php';

require './Models/Food.php';
require './Models/Toy.php';
require './Models/Kennel.php';

// istanzio due oggetti di classe Category
$dogCategory = new Category("cane", "<i class='fa-solid fa-dog fs-2 text-white bg-dark p-2'></i>");
$catCategory = new Category("gatto", "<i class='fa-solid fa-cat fs-2 text-white bg-dark p-2'></i>");


// istanzio tre oggetti di classe diversa
$food1 = new Food("Ultima", true, "https://static.ultima-affinity.com/catalog/8410650153186/3d-Pack/largeImage", 13.32, $dogCategory, "Cibo", 10, "Tonno, nutella", "12/24");

$toy1 = new Toy("Topino Giochino", false, "https://www.clappet.com/1828/gioco-gatto-topini-strisce-3-pz.jpg", 50.25, $catCategory, "Gioco", "Plastica", "Multicolore", "Small");

$kennel1 = new Kennel("Letto Cozy Kingdom", true, "https://shop-cdn-m.mediazs.com/bilder/0/400/74696__cozy_kingdom_kuschelbett_fg_4623_0.jpg", 25000, $dogCategory, "Cuccia", "Cotone", "Blu", "Big");


// creo un array con dentro i tre prodotti
$products = [
    $food1,
    $toy1,
    $kennel1

];





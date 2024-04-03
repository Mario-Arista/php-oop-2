<?php

require './Models/Product.php';
require './Models/Category.php';

// istanzio tre oggetti di classe Category
$category1 = new Category(true, "<i class='fa-solid fa-dog fs-2 text-white bg-dark p-2'></i>", null);
$category2 = new Category(false, null, "<i class='fa-solid fa-cat fs-2 text-white bg-dark p-2'></i>");
$category3 = new Category(true, "<i class='fa-solid fa-dog fs-2 text-white bg-dark p-2'></i>", null);



// istanzio tre oggetti di classe Product
$product1 = new Product("Ultima", "https://static.ultima-affinity.com/catalog/8410650153186/3d-Pack/largeImage", 13.32, $category1, "Cibo");
$product2 = new Product("Topino Giochino", "https://www.clappet.com/1828/gioco-gatto-topini-strisce-3-pz.jpg", 50.25, $category2, "Gioco");
$product3 = new Product("Letto Cozy Kingdom", "https://shop-cdn-m.mediazs.com/bilder/0/400/74696__cozy_kingdom_kuschelbett_fg_4623_0.jpg", 25000, $category3, "Cuccia");

// creo un array con dentro i tre prodotti
$products = [
    $product1,
    $product2,
    $product3

];





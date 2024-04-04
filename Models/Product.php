<?php

/**
 * Classe per il singolo prodotto in generale
 */
class Product {

    public $name;
    public $image;

    public $price;

    public $category;
    public $type;

    public $isAvailable;
    public $quantityAvailable;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  bool $_isAvailable
     * @param  string $_image
     * 
     * @param  float $_price
     * 
     * @param  Category $_category
     * @param  string $_type
     * 
     */
    function __construct($_name, $_isAvailable, $_image, $_price, Category $_category, $_type ) {
       
        $this->name = $_name;
        $this->isAvailable = $_isAvailable;

        $this->image = $_image;

        $this->category = $_category;
        $this->type = $_type;

        // Controllo che il prezzo è un numero && maggiore di zero
        if(is_numeric($_price) && $_price >= 0) {

            // Converto $_price in un numero float
            // così se inserisco un numero tra virgolette nel db 
            // me lo converte in float
            $this->price = floatval($_price);

        } else {
            throw new Exception("Il prezzo fornito non è valido");
        }

        // controllo se il prodotto è disponibile
        if($this->isAvailable !== true) {
            throw new Exception("Il prodotto non è disponibile");
            
        }

    }

}
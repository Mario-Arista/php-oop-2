<?php

class Food extends Product {

    public $weight;
    public $ingredients;
    public $expireDate;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  bool $_isAvailable
     * @param  string $_image
     * 
     * @param  float $_price
     * @param  Category $_category
     * @param  string $_type
     * @param  float $_weight
     * @param  string $_ingredients
     * @param  string $_expireDate
     */
    function __construct($_name, $_isAvailable, $_image, $_price, Category $_category, $_type, $_weight, $_ingredients, $_expireDate ) {
        parent::__construct($_name, $_isAvailable, $_image, $_price, $_category, $_type);

        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
        $this->expireDate = $_expireDate;

        // Controllo che il prezzo è un numero && maggiore di zero
        if(is_numeric($_weight) && $_weight >= 0) {

            // Converto $_weight in un numero float
            // così se inserisco un numero tra virgolette nel db 
            // me lo converte in float
            $this->weight = floatval($_weight);

        } else {
            throw new Exception("Il peso fornito non è valido");
        }
    }

}
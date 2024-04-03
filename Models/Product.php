<?php

/**
 * Classe per il singolo prodotto in generale
 */
class Product {

    public $name;
    public $image;

    public $price;

    public $isAvailable;
    public $quantityAvailable;

    public $category;
    public $type;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  string $_image
     * 
     * @param  int $_price
     * @param  int $_quantityAvailable
     * 
     * @param  bool $_isAvailable
     * 
     * @param  Category $_category
     * @param  string $_type
     * 
     */
    function __construct($_name, $_image, $_price, $_quantityAvailable, $_isAvailable, Category $_category, $_type ) {
        $this->name = $_name;
        $this->image = $_image;

        $this->price = $_price;
        $this->quantityAvailable = $_quantityAvailable;

        $this->isAvailable = $_isAvailable;

        $this->category = $_category;
        $this->type = $_type;

    }

}
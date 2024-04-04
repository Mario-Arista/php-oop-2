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

        $this->price = $_price;

        $this->category = $_category;
        $this->type = $_type;

    }

}
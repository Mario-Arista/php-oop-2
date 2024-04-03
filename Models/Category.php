<?php

/**
 * Calsse di Categoria: o per cane o per gatto
 */
class Category {

    public $isForDog;
    public $isForCat;
    public $catIcon;
    public $dogIcon;

    /**
     * __construct
     *
     * @param  bool $_isForDog
     * @param  bool $_isForCat
     * @param  string $_dogIcon
     * @param  string $_catIcon
     * 
     */
    function __construct($_isForDog, $_isForCat, $_dogIcon, $_catIcon) {
        $this->isForDog = $_isForDog;
        $this->isForCat = $_isForCat;
        $this->dogIcon = $_dogIcon;
        $this->catIcon = $_catIcon;


    }


}
<?php

/**
 * Calsse di Categoria: o per cane o per gatto
 */
class Category {

    public $isForDog;
    public $catIcon;
    public $dogIcon;

    /**
     * __construct
     *
     * @param  bool $_isForDog
     * @param  string $_dogIcon
     * @param  string $_catIcon
     * 
     */
    function __construct($_isForDog, $_dogIcon, $_catIcon) {
        $this->isForDog = $_isForDog;
        $this->dogIcon = $_dogIcon;
        $this->catIcon = $_catIcon;

    }


}
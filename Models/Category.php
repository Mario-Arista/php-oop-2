<?php

/**
 * Classe di Categoria: o per cane o per gatto
 */
class Category {

    public $name;
    public $icon;

    /**
     * __construct
     *
     * @param  string $_name
     * @param  string $_icon
     * 
     */
    function __construct($_name, $_icon) {
        $this->name = $_name;
        $this->icon = $_icon;

        // controllo se la categoria è cane p gatto
        if($this->name !== "cane" && $this->name !== "gatto") {
            throw new Exception("Il prodotto può essere solo di categoria 'cane' o 'gatto'");
            
        }

    }


}
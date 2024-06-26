<?php
require_once __DIR__ . '/Traits/Sizeable.php';
require_once __DIR__ . '/Traits/HasMaterial.php';
require_once __DIR__ . '/Traits/HasColors.php';

class Kennel extends Product {
    use Sizeable;
    use HasMaterial;
    use HasColors;

    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  bool $_isAvailable
     * @param  string $_image
     * @param  float $_price
     * @param  Category $_category
     * @param  string $_type
     * @param  string $_material
     * @param  string $_colors
     * @param  string $_size
     * @return void
     */
    function __construct($_name, $_isAvailable, $_image, $_price, Category $_category, $_type, $_material, $_colors, $_size) {
        parent::__construct($_name, $_isAvailable, $_image, $_price, $_category, $_type);

        $this->material = $_material;
        $this->colors = $_colors;
        $this->size = $_size;

    }

}
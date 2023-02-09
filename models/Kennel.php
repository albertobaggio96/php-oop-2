<?php 
require_once __DIR__ . "/Product.php";

//class Food
class Kennel extends Product {

    //fields
    protected $materials;
    protected $size;


    //method construct
    function __construct($_name, $_price, $_category, $_materials, $_size)
    {
        parent::__construct($_name, $_price, $_category);
        $this->setMaterials($_materials);
        $this->setSize($_size);
    }

    //methods
    function getMaterials() {
        return $this->materials;
    }

    function getSize() {
        return $this->size;
    }

    function setMaterials($_materials) {
        if (is_array($_materials)) {
            $this->materials = $_materials;
        } else {
            $this->materials = null;
        }
    }

    function setSize($_size) {
        if (is_string($_size)) {
            $this->size = $_size;
        } else {
            $this->size = null;
        }
    }
}
<?php 
require_once __DIR__ . "/Product.php";

//class Food
class Toy extends Product {

    //fields
    protected $materials;
    protected $type;


    //method construct
    function __construct($_name, $_price, $_category, $_materials, $_type)
    {
        parent::__construct($_name, $_price, $_category);
        $this->setMaterials($_materials);
        $this->setType($_type);
    }

    //methods
    function getMaterials() {
        return $this->materials;
    }

    function getType() {
        return $this->type;
    }

    function setMaterials($_materials) {
        if (is_array($_materials)) {
            $this->materials = $_materials;
        } else {
            $this->materials = null;
        }
    }

    function setType($_type) {
        if (is_string($_type)) {
            $this->type = $_type;
        } else {
            $this->type = null;
        }
    }
}
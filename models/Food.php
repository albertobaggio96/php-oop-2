<?php 
require_once __DIR__ . "/Product.php";

//class Food
class Food extends Product {

    //fields
    protected $expiring_date;
    protected $ingredients;


    //method construct
    function __construct($_name, $_price, $_category, $_expiring_date, $_ingredients)
    {
        parent::__construct($_name, $_price, $_category);
        $this->setExpiringDate($_expiring_date);
        $this->setIngredients($_ingredients);
    }

    //methods
    function getExpiringDate() {
        return $this->expiring_date;
    }

    function getIngredients() {
        return $this->ingredients;
    }

    function setExpiringDate($_expiring_date) {
        if (is_string($_expiring_date)) {
            $this->expiring_date = $_expiring_date;
        } else {
            $this->expiring_date = null;
        }
    }

    function setIngredients($_ingredients) {
        if (is_array($_ingredients)) {
            $this->ingredients = $_ingredients;
        } else {
            $this->ingredients = null;
        }
    }
}
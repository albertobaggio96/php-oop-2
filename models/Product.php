<?php 

/*Class Product*/ 

class Product {
    protected $name;
    protected $price;
    protected $category;

    function __construct(String $_name, float $_price, Category $_category) 
    {
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setCategory($_category);

    }

    //methods

    function getName() {
        return $this->name;
    }

    function getPrice() {
        return $this->price;
    }

    function getCategory() {
        return $this->category;
    }

    function setName($_name) {
        if (is_string($_name)) {
            $this->name = $_name;
        } else {
            $this->name = null;
        }
    }

    function setPrice($_price) {
        if (is_float($_price)) {
            $this->price = $_price;
        } else {
            $this->price = null;
        }
    }

    function setCategory($_category) {
        if (is_string($_category)) {
            $this->category = $_category;
        } else {
            $this->category = null;
        }
    }
}
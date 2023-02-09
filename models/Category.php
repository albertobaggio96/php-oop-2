<?php

class Category {

    //fields
    protected $logo;
    protected $name;

    function __construct($_name)
    {
        $this->setNameAndLogo($_name);
    }

    //methods
    function getName() {
        return $this->name;
    }

    function getLogo() {
        return $this->logo;
    }

    function setNameAndLogo($_name) {
        if (is_string($_name) && $_name == "cane" || $_name == "gatto") {
            $this->name = $_name;

            if($_name == "cane") {
                $this->logo = "https://cdn-icons-png.flaticon.com/512/620/620851.png";
            } else {
                $this->logo = "https://cdn-icons-png.flaticon.com/512/220/220124.png";
            }
        } else {
            $this->name = null;
        }
    }
}
<?php

class Product {

    public $name;

    public $brand; 

    public $price = 0;

    public $suitableFor = 'Dogs';

    public function __construct($_name, $_brand, $_price) {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
    }

    public function getDetails() {
        return "$this->name $this->brand - Prezzo: $this->price euro.";
    }
}

?>
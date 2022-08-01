<?php

require_once __DIR__ . '/Product.php';

class DogHouse extends Product {

    // override
    public $price = 30;

    public function getDetails() {
        return "$this->name $this->brand - Prezzo: $this->price euro.";
    }
}

?>
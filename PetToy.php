<?php

require_once __DIR__ . '/Product.php';

class PetToy extends Product {

    // override
    public $price = 3;

    public function getDetails() {
        return "$this->name $this->brand - Prezzo: $this->price euro.";
    }
}

?>
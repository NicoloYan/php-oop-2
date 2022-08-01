<?php

require_once __DIR__ . '/Product.php';

class PetFood extends Product {

    // override
    public $suitableFor = 'Cats';

    // override
    public $price = 5;

    public $netWeight;

    // override
    public function __construct($_name, $_brand, $_price, $_netWeight) {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->netWeight = $_netWeight;
    }

    public function getDetails() {
        return "$this->name $this->brand - Prezzo: $this->price euro. - Peso: $this->netWeight grammi.";
    }
}

?>
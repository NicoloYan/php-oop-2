<?php

require_once __DIR__ . '/Product.php';

class PetFood extends Product {

    // override
    public $suitableFor = 'Cats';
}

?>
<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/DogHouse.php';
require_once __DIR__ . '/PetToy.php';
require_once __DIR__ . '/PetFood.php';

$cuccia = new DogHouse('cuccia', 'çhicco', 400000000);
var_dump($cuccia);

$tonno = new PetFood('tonno in scatola', 'rio mare', 400000000);
var_dump($tonno);
?>
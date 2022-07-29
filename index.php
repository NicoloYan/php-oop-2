<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/DogHouse.php';
require_once __DIR__ . '/PetToy.php';
require_once __DIR__ . '/PetFood.php';

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/UnsubscribedUser.php';
require_once __DIR__ . '/SubscribedUser.php';


// $cuccia = new DogHouse('cuccia', 'çhicco', 400000000);
// var_dump($cuccia);

$catFoodCan = new PetFood('Cibo per gatti', 'catbrand', 5, 150);
// var_dump($tonno->getDetails());

$bone = new PetToy('Osso', 'dogbrand', 3);
// var_dump($osso);

$giacomino = new UnsubcribedUser('giaco', 'mino', 'giaco@mi.no', 2863196418964);
$giacomino->addToCart($bone);
$giacomino->addToCart($catFoodCan);
$giacomino->balance = 7;
if($giacomino->makePayment() === 'Acquisto effettuato') {
    echo 'Grazie per aver acquistato dal nostro sito';
}
?>
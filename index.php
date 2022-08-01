<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/DogHouse.php';
require_once __DIR__ . '/PetToy.php';
require_once __DIR__ . '/PetFood.php';

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/UnsubscribedUser.php';
require_once __DIR__ . '/SubscribedUser.php';


$dogHouse = new DogHouse('cuccia', 'çhicco', 400000000);
var_dump($dogHouse->getDetails());

$catFoodCan = new PetFood('Cibo per gatti', 'catbrand', 5, 150);
// var_dump($tonno->getDetails());

$bone = new PetToy('Osso', 'dogbrand', 3);
var_dump($bone->getDetails());

$giacomino = new UnsubcribedUser('giaco', 'mino', 'giaco@mi.no', 2863196418964);
$giacomino->addToCart($bone);
$giacomino->addToCart($catFoodCan);
$giacomino->balance = 5;

try {
    if($giacomino->makePayment() === 'Acquisto effettuato') {
        echo "<h2>Thank you for purchasing this product.</h2>";
    }
} catch(Exception $e) {
    
    error_log($e->getMessage());

    echo "Something went wrong. Please, check your balance and try again!";
}
?>
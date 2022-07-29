<?php

class User {

    public $firstName;

    public $lastName;

    public $email;

    public $id;

    public $discount = 0;

    public $balance = 0;

    protected $selectedProducts = [];

    public function __construct($_firstName, $_lastName, $_email, $_id) {
        $this->firstName = $_firstName;
        $this->lastName = $_lastName;
        $this->email = $_email;
        $this->id = $_id;
    }

    public function addToCart($product) {
        $this->selectedProducts[] = $product;
    }

    public function getSelectedProducts() {
        return $this->selectedProducts;
    }

    public function calculatePrice() {
        $sum = 0;
        foreach($this->selectedProducts as $product) {
            $sum += $product->price;
        }
        
        $sum -= $sum * $this->discount / 100;
        
        return $sum;
    }

    public function makePayment() {
        $amountDue = $this->calculatePrice();
        // var_dump($amountDue);

        if($this->balance < $amountDue) {
            die('Credito insufficiente');
        } else {
            return 'Acquisto effettuato';
        }
    }
}

?>
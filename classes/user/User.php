<?php

    class User{
        public $name;
        public $email;
        protected $discount = 0;

        public $cart = [];

        public function moveToCart($_product) {
            $this->cart[] = $_product;
        }

        public function infoCart() {
            return $this->cart;
        }

        public function getCartSum() {
            $totalSum = 0;

            foreach($this->cart as $product) {
                $totalSum += $product->price;
            };

            $totalSum -= $totalSum * $this->discount / 100;
            
            return $totalSum;
        }

        public function paymentResult($credit) {
            $totalPrice = $this->getCartSum();
            
            if($credit->balance < $totalPrice) {
                throw new Exception("Utente: $this->name: Saldo Non disponibile");
            } else {
                return 'ok';
            }
        }
    }
?>
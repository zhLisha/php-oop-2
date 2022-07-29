<?php

    class CreditCard{
        public $nameOwner;
        public $number;
        public $expiration;
        public $cvv;
        public $balance = 0;

        public function __construct($_nameOwner, $_number, $_expiration, $_cvv) {
            $this->nameOwner = $_nameOwner;
            $this->number = $_number;
            $this->expiration = $_expiration;
            $this->cvv = $_cvv;
        }
    }
?>
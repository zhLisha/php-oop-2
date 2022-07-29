<?php 
include_once __DIR__ . '/BarCode.php';

    class AnimalProducts {
        use BarCode;
        
        public $name;
        public $size;
        public $price;
        public $poster;

        public function __construct($_name, $_size, $_price, $_barCode) {
            $this->name = $_name;
            $this->size = $_size;
            $this->price = $_price;
            $this->barCode = $_barCode;
        }

        public function infoProduct() {
            return $this->name;
        }
    }
?>
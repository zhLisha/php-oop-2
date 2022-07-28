<?php 
    class AnimalProducts {
        public $name;
        public $size;
        public $price;
        public $poster;

        public function __construct($_name, $_size, $_price) {
            $this->name = $_name;
            $this->size = $_size;
            $this->price = $_price;
        }

        public function infoProduct() {
            return $this->name;
        }
    }
?>
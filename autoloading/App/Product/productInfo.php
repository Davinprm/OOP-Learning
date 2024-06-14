<?php
    class productInfo {
        public $productList = [];

        //first Product as param for make obj it's own type data
        public function addProduct(Product $product) {
            $this->productList[] = $product;
        }

        public function showProductList() {
            $b = "Patisserie Sale! <br>";
            //looping all product value
            foreach ($this->productList as $p) {
                $b .= "{$p->sale()}<br>";
            }
            return $b;
        }
    }
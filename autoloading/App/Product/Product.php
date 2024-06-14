<?php 
    //Make Canary Bakery
    abstract class Product { 
        //make property for every type
        protected $savory, $sweet, $bread, $price, $discount;

        //make Cunstructor Method, to run d method every time we add value on obj in d param
        public function __construct(
            $savory = 'Curry Puff', //define this prop as a default
            $sweet = 'Chocolate Roll Cake',
            $bread = 'Bun', 
            $price = '10',
        ) {
        //'$this->' for took val from prop above 
            $this->savory = $savory;
            $this->sweet = $sweet;
            $this->bread = $bread;
            $this->price = $price;
        }

        //setter
        public function setDiscount($discount) {
            $this->discount = $discount;
        }

        public function getDiscount() {
            return $this->discount;
        }

        public function setPrice($price) {
            $this->price = $price;
        }

        //make method for protected prop to be appear on product3 echo obj //could be call getter
        public function getPrice() {
            return $this->price - ($this->price * $this->discount / 100);
        }

        //setter
        public function setBread ($bread) {
            $this->bread = $bread;
        }

        //make this method cuz d prop is private, to show it on echo //this could be call getter
        public function getBread() {
            return $this->bread;
        }

        public function setSavory($savory) {
            $this->savory = $savory;
        }

        public function getSavory() {
            return $this->savory;
        }

        public function setSweet($sweet) {
            $this->sweet = $sweet;
        }

        public function getSweet() {
            return $this->sweet;
        }

        public function getFreeSugar() {
            $str = "<br> *Menu above is Free Sugar.";
            return $str;
        }

        //script
        public function greeting() {
            return "Welcome to Canary Bakery!<br>";
        }

        abstract public function todaySale();
    }
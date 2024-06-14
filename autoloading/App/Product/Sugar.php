<?php 
    class Sugar extends Product implements selling {
        public $sugar;

        public function __construct($savory = 'Curry Puff', $sweet = 'Chocolate Roll Cake', $bread = 'Bun', $price = '10', $sugar = true) {
            parent::__construct($savory, $sweet, $bread, $price);
            $this->sugar = $sugar;
        }

        public function todaySale () {
            $a = "<br>- {$this->getBread()} = {$this->getPrice()}k";
            $a .= "<br>- {$this->getSavory()} = {$this->getPrice()}k";
            $a .= "<br>- {$this->getSweet()} = {$this->getPrice()}k";
            return $a;
        }
        
        public function sale() {
            $info = $this->todaySale(); 
            if ($this->sugar == true) {
                $info .= "<br> *Menu above is contain sugar";
            } else if ($this->sugar == false) {
                $info .= "<br> *Menu above is free sugar";
            }
            return $info;
        }
    }
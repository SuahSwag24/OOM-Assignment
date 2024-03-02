<?php

    class Product
    {
        private $prodName , $price , $discount;

        public function __construct($pName , $pPrice , $pDiscount)
        {
            $this->prodName = $pName;
            $this->price = $pPrice;
            $this->discount = $pDiscount;
        }

        public function setName($pName)
        {
            $this->prodName = $pName;
        }

        public function setPrice($pPrice)
        {
            $this->price = $pPrice;
        }

        public function getName()
        {
            return $this->prodName;
        }

        public function CalculateDiscount()
        {
            return $this->price - $this->price * $this->discount;
        }

        public function PrintProductInfo()
        {
            echo("<p>Product Name: " . $this->prodName . "</p>");
            echo("<p>Product Price: " . $this->price . "</p>");
            echo("<p>Discount Rate: " . $this->discount * 100 . "%</p>");
            echo("<p>Price after discount: " . $this->CalculateDiscount() . "</p>");
        }
        
    }

?>
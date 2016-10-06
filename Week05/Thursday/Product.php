<?php
    class Product{

        public function __construct($productName, $productPrice){
            echo $productName . " cost &euro;" . $productPrice . "<br/>";
        }
    }

    $prd1 = new Product("Shoes", 90);
    $prd2 = new Product("Pants", 20);
    $prd3 = new Product("Shirt", 15);
?>
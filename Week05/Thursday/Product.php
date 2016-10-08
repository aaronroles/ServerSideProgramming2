<?php

    $productArray = array(
        array("Shoes", 90),
        array("Pants", 20),
        array("Shirt", 25)
    );

    class Product{

        public function __construct($productName, $productPrice){
            echo '<div class="product" id="product_' . $productName . '">';
            echo $productName . " - &euro;" . $productPrice . "<br/>";
            echo '<img src="images/' . $productName . '.jpg" width="250" height="165"><br/>';
            echo '<button>Add to cart</button><br/>';
            echo '</div>';
        }
    }

    //$prd1 = new Product("Shoes", 90);
    //$prd2 = new Product("Pants", 20);
    //$prd3 = new Product("Shirt", 25);

?>

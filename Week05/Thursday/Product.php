<?php

    $productDb = array(
        array("Shoes", 90),
        array("Pants", 20),
        array("Shirt", 25)
    );

    class Product{

        public function __construct($productName, $productPrice){
            echo '<form method="POST" class="product" id="product_'.$productName.'">';
                echo $productName . " - &euro;" . $productPrice . "<br/>";
                echo '<img src="images/' . $productName . '.jpg" width="250" height="165"><br/>';
                echo '<input type="submit" id="submit" name="AddProduct" value="Submit" class="tidy"><br/>';
            echo '</form>';
        }
    }

    //$prd1 = new Product("Shoes", 90);
    //$prd2 = new Product("Pants", 20);
    //$prd3 = new Product("Shirt", 25);

?>

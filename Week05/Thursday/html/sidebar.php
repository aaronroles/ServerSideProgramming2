<?php
    echo '<div id="sidebar">';
        echo '<form method="POST" id="newProduct" name="newProduct" action="index.php">';
            echo '<h1 class="tidy">Add new product?</h1>';
            echo '<input type="text" id="productName" name="productName" placeholder="Product name.." class="tidy"><br/>';
            echo '<input type="number" id="productPrice" name="productPrice" placeholder="Product price.." class="tidy"><br/>';
            echo '<input type="submit" id="submit" name="Submit" value="Submit" class="tidy">';
        echo '</form>';
    echo '</div>';
?>
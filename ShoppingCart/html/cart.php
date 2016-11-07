<div id="cart">
    <h1 id="cartHeading">Cart</h1>
    <?php
        // Load all products in cart from db  
        foreach($_SESSION["myCart"] as $id){
            $stmt = $db->prepare("SELECT * FROM products WHERE productId = :productId");
            // Where the db productId matches $id 
            $stmt->bindParam(":productId", $id);
            $stmt->execute();
            // For every row
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                // Create a div for product
                echo '<div class="cartProduct">';
                    echo '<h3>'.$row['productName'].' &euro;'.$row['productPrice'].'</h3>'; 
                    echo '<img src="'.$row["productImg"].'" width="250" height="175"/>';
                    echo '<form method="post" id="delete">';
                        echo '<input type="hidden" name="cartProductId" value="'.$row["productId"].'">';
                        echo '<input type="submit" id="deleteBtn" name="delete" value="Remove from Cart">';
                    echo '</form>';
                echo '</div>';
            }
        }
        // If the cart is not empty, display the place order button
        // If the cart is empty there is no need for the button
        if(!empty($_SESSION["myCart"])){
            echo '<form id="cartForm" method="post">';
                echo '<input type="submit" id="placeOrderBtn" name="placeOrder" value="Place Order">';
            echo '</form>';
        }
    ?>
</div>
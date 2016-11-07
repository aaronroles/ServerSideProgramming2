<div id="cart">
    <h1 id="cartHeading">Cart</h1>
    <?php
        // Load all products from DB to page 
        foreach($_SESSION["myCart"] as $id){
            $stmt = $db->prepare("SELECT * FROM products WHERE productId = :productId");
            $stmt->bindParam(":productId", $id);
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
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
        if(!empty($_SESSION["myCart"])){
            echo '<form id="cartForm" method="post">';
                echo '<input type="submit" id="placeOrderBtn" name="placeOrder" value="Place Order">';
            echo '</form>';
        }
    ?>
</div>
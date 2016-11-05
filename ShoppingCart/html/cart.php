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
                echo '</div>';
            }
        }
    ?>
</div>
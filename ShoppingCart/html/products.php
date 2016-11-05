<div id="products">
    <h1 id="productsHeading">Products</h1>
    <?php
        // Load all products from DB to page 
        $stmt = $db->prepare("SELECT * FROM products");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            echo '<form class="productItem" method="post">';
                echo '<h3>'.$row['productName'].' &euro;'.$row['productPrice'].'</h3>'; 
                echo '<img src="'.$row["productImg"].'" class="imgScale"/>';
                echo '<div class="description">'.$row['productDesc'].'</div>';
                echo '<input type="hidden" name="productId" value="'.$row["productId"].'">';
                echo '<input type="submit" class="addToCartBtn" name="addToCart" value="Add to Cart">';
            echo '</form>';
        }
    ?>
</div>
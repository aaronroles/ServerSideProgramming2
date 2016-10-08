<?php
    include('Product.php');
    include('html/header.php');
    include('html/sidebar.php');
    echo '<div id="content">';
    foreach($productArray as $product){
        $newPrd = new Product($product[0], $product[1]);
    }
    echo'</div>';
    include('html/footer.php');
?>

<link rel='stylesheet' type='text/css' href='html/styles.php' />
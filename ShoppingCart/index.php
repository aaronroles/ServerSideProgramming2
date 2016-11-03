<link rel='stylesheet' type='text/css' href='html/styles.css'/>

<?php
    // Always have database available
    include("database.php");

    // If there is no logged in user or session
    if (empty($_SESSION["userSession"])){
        include("html/register.php");
        include("html/login.php");
    }

    // If a user is logged in / session available
    if (!empty($_SESSION["userSession"])){
        include('html/status.php');
        //include("html/logout.php");
        include('html/cart.php');
        include('html/products.php');
    }
?>
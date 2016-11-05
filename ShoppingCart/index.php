<link rel='stylesheet' type='text/css' href='html/styles.css'/>

<?php
    // Work maintained on GitHub:
    // https://github.com/aaronroles/ServerSideProgramming2/tree/master/ShoppingCart 

    // Always have a session running on index
    session_start();
    var_dump($_SESSION);

    // Always have database available
    include("database.php");

    // If there is no session variable for a logged in user 
    // i.e. Not logged in 
    if (empty($_SESSION["userSession"])){
        include("html/register.php");
        include("html/login.php");
    }

    // If there is a session variable for a logged in user 
    // i.e. Logged in 
    if (!empty($_SESSION["userSession"])){
        include('html/status.php');
        include('html/cart.php');
        include('html/products.php');
    }
?>
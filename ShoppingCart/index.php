<link rel='stylesheet' type='text/css' href='html/styles.css'/>
<script src="libs/jQuery/jquery-3.1.1.min.js"></script>
<script src="libs/jQuery/jquery.validation.min.js"></script>

<?php
    // Work maintained on GitHub:
    // https://github.com/aaronroles/ServerSideProgramming2/tree/master/ShoppingCart 

    // Always have a session running on index
    session_start();
    
    // Only require config.php once because I just want
    // the cart session variable to be created once
    require_once("config.php");

    // Always have database available
    include("database.php");

    // If there is no session variable for a logged in user 
    // i.e. Not logged in 
    if (empty($_SESSION["userSession"])){
        // Load the register and login pages
        include("html/register.php");
        include("html/login.php");
    }

    // If there is a session variable for a logged in user 
    // i.e. Logged in 
    if (!empty($_SESSION["userSession"])){
        // Load the status bar, cart and products pages
        include('html/status.php');
        include('html/cart.php');
        include('html/products.php');            
    }
?>

<script src="scripts/validation.js"></script>
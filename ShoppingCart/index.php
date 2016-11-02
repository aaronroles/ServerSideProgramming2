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
        // Display cart.php - a list of chosen products
        // Display products.php - a list of all products
        include("html/logout.php");
    }
?>
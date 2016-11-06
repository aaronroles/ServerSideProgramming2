<?php

    // If there is no cart variable
    if(!isset($_SESSION["myCart"])){
        // Create it
        $_SESSION["myCart"] = array();
    }

?>
<?php
    // Creating a cookie
    setcookie("myFirstCookie", "Original Cookie Value", time()+120, "/");

    echo $_COOKIE["myFirstCookie"];

    // Updating a cookie
    setcookie("myFirstCookie", "Updated Cookie Value", time()+120, "/");

    // Deleting a cookie
    // Can set time parameter in setcookie() to -1 so it expires immediately
    //      setcookie("myFirstCookie", "Updated Cookie Value", time()-1, "/");
    // Or just unset it
    //      unset($_COOKIE["myFirstCookie"]);

?>

<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 09/12/2016
 * Time: 11:49
 */

get_header();

// If nobody is logged in
if(!is_user_logged_in()) {
    // Show login and register forms
    include("login.php");
    include("register.php");
}
// If someone is logged inc
else if(is_user_logged_in()){
    // Then link them to the main menu
    echo "<a href='/index'>Go to main menu</a>";
}

get_footer();
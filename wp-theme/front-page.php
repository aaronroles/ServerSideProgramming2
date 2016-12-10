<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 09/12/2016
 * Time: 11:49
 */

get_header();

if(!is_user_logged_in()) {
    include("login.php");
    include("register.php");
}
else if(is_user_logged_in()){
    wp_redirect("/index/");
    exit();
}

get_footer();
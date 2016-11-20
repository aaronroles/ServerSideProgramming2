<?php
    get_header();
    include("html/login.php");
    get_footer();

    if(isset($_POST["submitLogin"])){
        echo "logged in";
    }
?>
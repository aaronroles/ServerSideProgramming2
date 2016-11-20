<?php
    global $wpdb;

    get_header();
    include("html/login.php");
    get_footer();

    if(isset($_POST["submitLogin"])){
        $username = $_POST["username"];
        $password = SHA1($_POST["password"]);
        
        $data = $wpdb->get_row(
            "SELECT * FROM ar_users WHERE empUsername='".$username."' AND empPassword='".$password."'"
        );

        echo "Hello ".$data->empUsername;
    }
?>
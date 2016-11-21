<?php
    global $wpdb;

    get_header();
    include("html/login.php");
    get_footer();

    if(isset($_POST["submitLogin"])){
        // Get post data
        $username = $_POST["username"];
        $password = SHA1($_POST["password"]);
        
        // Run a query to find single user row
        $data = $wpdb->get_row(
            "SELECT * FROM ar_users WHERE empUsername='".$username."' AND empPassword='".$password."'"
        );

        // If we have data
        if(isset($data)){
            // Message to logged in user 
            echo "Hello ".$data->empUsername;
        }
        // If no data found
        else{
            // Error message
            echo "No user found";
        }
    }
?>
<?php
    global $wpdb;

    get_header();
    include("html/login.php");
    get_footer();

    // If button is submitted
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
            // If EMPLOYER show admin page

            // If EMPLOYEE show employee page 
            
        }
        // If no data found
        else{
            // Error message
            echo "No user found";
        }
    }
?>
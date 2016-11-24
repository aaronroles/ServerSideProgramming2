<?php

    global $username;

    // If login button is submitted
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
            // If it is the employer/admin who logged in 
            // then show him the admin stuff
            if($data->empRole == "Employer"){
                wp_redirect(get_site_url()."/?page_id=50"); 
                exit;
            }

            // If it is the employee who logged in 
            // then show the employee pages 
            if($data->empRole == "Employee"){
                wp_redirect(get_site_url()."/?page_id=48");
                exit;
            }
        }
        // If no data found
        else{
            // Error message
            echo "No user found";
        }
    }

?>
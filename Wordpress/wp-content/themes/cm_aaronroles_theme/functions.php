<?php

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
                echo "Hello ".$data->empRole;
                //wp_redirect("/employer");
                // ^^^ Create Employer page in the admin
                // ^^^ Create employer template page 
                //exit;
            }
            // If it is the employee who logged in 
            // then show the employee pages 
            if($data->empRole == "Employee"){
                echo "Hello ".$data->empRole;
                // wp_redirect("/employee");
                // ^^^ Create Employee page in the admin
                // ^^^ Create employee template page 
                //exit;
            }
        }
        // If no data found
        else{
            // Error message
            echo "No user found";
        }
    }

?>
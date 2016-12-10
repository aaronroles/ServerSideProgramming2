<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 08/12/2016
 * Time: 20:17
 */
get_header();
// If someone is logged in
if(is_user_logged_in()){
    // If they are the admin
    if(get_user_role() == "administrator"){
        // Include the admin/employer page
        include("page-employer.php");
    }
    // If they are a subscriber
    if(get_user_role() == "subscriber"){
        // Include the subscriber/employee page
        include("page-employee.php");
    }
}
// If nobody is logged in
else if(!is_user_logged_in()){
    // Direct them to the log in area
    echo "<h2>Please <a href='http://aaron.irishwebhq.ie'>log in</a></h2>";
}

get_footer();
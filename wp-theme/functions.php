<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 09/12/2016
 * Time: 12:48
 */
global $currentUserId;
global $currentRole;
global $wpdb;

add_action("init","getId");

function getId(){
    $currentUserId = get_current_user_id();
}

function get_user_role()
{
    global $wp_roles;
    $currentRole = "";

    foreach ($wp_roles->role_names as $role => $name) {
        if (current_user_can($role)) {
            $currentRole = $role;
        }
    }
    return $currentRole;
}

function checkRole($role){
    if($role == "subscriber"){
        echo "Go to employees stuff";
    }
    if($role == "administrator"){
        echo "go to employer's stuff";
    }
}

function consoleLog($output){
    echo "<script>console.log('".$output."')</script>";
}

// If the Register form is posted
if(isset($_POST["register"])){
    // Capture post data
    $userLogin = $_POST["username"];
    $userPassword = $_POST["password"];
    $website = "http://example.com";
    // Sort data into array
    $userdata = array(
        'user_login' => $userLogin,
        'user_url' => $website,
        'user_pass' => $userPassword
    );
    // Add user to wp_users
    $user_id = wp_insert_user($userdata);
    // On success
    if(!is_wp_error($user_id)) {
        echo "You are registered - please log in below";
    }
    else{
        echo "There was a mistake - please try again";
    }
}

// If the expense is approved
if(isset($_POST["approveExpense"])){
    // Capture post data
    $fromUserId = $_POST["expenseUserId"];
    $expenseToApprove = $_POST["expenseId"];
    // Update the status field in ar_expenses
    // for that expense item
    $wpdb->update(
        'ar_expenses',
        array(
            'expenseStatus' => 'Approved'
        ),
        array(
            'expenseUserId' => $fromUserId,
            'expenseId' => $expenseToApprove
        )
    );
}

// If the expense is rejected
if(isset($_POST["rejectExpense"])){
    // Capture post data
    $fromUserId = $_POST["expenseUserId"];
    $expenseToReject = $_POST["expenseId"];
    // Update the status field in ar_expenses
    // for that expense item
    $wpdb->update(
        'ar_expenses',
        array(
            'expenseStatus' => 'Rejected'
        ),
        array(
            'expenseUserId' => $fromUserId,
            'expenseId' => $expenseToReject
        )
    );
}

// If an expense is added
if(isset($_POST["submitExpense"])){
    // Capture post data
    $expDesc = $_POST["description"];
    $expCategory = $_POST["category"];
    $expCost = $_POST["cost"];
    // Add this to expenses table
    $wpdb->insert(
        'ar_expenses',
        array(
            'expenseDesc' => $expDesc,
            'expenseCategory' => $expCategory,
            'expenseCost' => $expCost,
            'expenseUserId' => get_current_user_id()
        )
    );
}
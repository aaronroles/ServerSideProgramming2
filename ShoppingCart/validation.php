<?php

// Takes in a String and validates it
function validateString($data){
    if(isset($data)){
        if(is_string($data)){
            $data = preg_replace('/[^A-Za-z0-9]/', ' ', $data);
            $data = strip_tags($data);
            $data = trim($data);
            $data = htmlentities($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            //echo "Checked, validated and sanitised: " . $data . "<br>";
            return $data;
        }
        else{
            echo '<script>alert("Invalid Text")</script>';
        }
    }
    else{
        echo '<script>alert("Invalid Text")</script>';
    }
}

// Takes in an email and validates it 
function validateEmail($data){
    if(isset($data)){
        if(filter_var($data, FILTER_VALIDATE_EMAIL)){
            $sanitised_email = filter_var($data, FILTER_SANITIZE_EMAIL);
            if(filter_var($sanitised_email, FILTER_VALIDATE_EMAIL)){
                $data = strip_tags($data);
                $data = trim($data);
                $data = htmlentities($data);
                $data = htmlspecialchars($data);
                $data = stripslashes($data);
                //echo "Checked, validated and sanitised: " . $data . "<br>";
                return $data;
            }
            else{
                echo '<script>alert("Invalid Email")</script>';
            }
        }
        else{
            echo '<script>alert("Invalid Email")</script>';
        } 
    }
    else{
        echo '<script>alert("Invalid Email")</script>';
    }
}
?>
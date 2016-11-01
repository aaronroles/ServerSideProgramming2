<?php

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
    }
    else{
        echo '<script>alert("Invalid Information")</script>';
    }
}

function validateNumber($data){
    if(isset($data)){
        if(is_numeric($data)){
            if(filter_var($data, FILTER_VALIDATE_INT)){
                $sanitised_number = filter_var($data, FILTER_SANITIZE_NUMBER_INT); 
                if(filter_var($sanitised_number, FILTER_SANITIZE_NUMBER_INT)){
                    $data = strip_tags($data);
                    $data = trim($data);
                    $data = htmlentities($data);
                    $data = htmlspecialchars($data);
                    $data = stripslashes($data);
                    //echo "Checked, validated and sanitised: " . $data . "<br>";
                    return $data;
                }
            }
        }
    }
    else{
        echo '<script>alert("Invalid Information")</script>';
    }
}

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
        } 
    }
    else{
        echo '<script>alert("Invalid Information")</script>';
    }
}
?>
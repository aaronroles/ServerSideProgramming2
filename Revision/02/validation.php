<?php

$name = $phone = $email = $age = $comment = "";

$name = check_input($_POST["Name"]);
$phone = check_input($_POST["Phone"]);
$email = check_input($_POST["Email"]);
$age = check_input($_POST["Age"]);
$comment = check_input($_POST["Comment"]);

function check_input($data){
    if(isset($data)){
        if(is_string($data)){
            $data = strip_tags($data);
            $data = trim($data);
            $data = htmlentities($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            echo "Checked, validated and sanitised: " . $data . "<br>";
            return $data;
        }

        if(is_numeric($data)){
            if(filter_var($data, FILTER_VALIDATE_INT)){
                $sanitised_number = filter_var($data, FILTER_SANITIZE_NUMBER_INT); 
                if(filter_var($sanitised_number, FILTER_SANITIZE_NUMBER_INT)){
                    $data = strip_tags($data);
                    $data = trim($data);
                    $data = htmlentities($data);
                    $data = htmlspecialchars($data);
                    $data = stripslashes($data);
                    echo "Checked, validated and sanitised: " . $data . "<br>";
                    return $data;
                }
            }
        }

        if(filter_var($data, FILTER_VALIDATE_EMAIL)){
            $sanitised_email = filter_var($data, FILTER_SANITIZE_EMAIL);
            if(filter_var($sanitised_email, FILTER_VALIDATE_EMAIL)){
                $data = strip_tags($data);
                $data = trim($data);
                $data = htmlentities($data);
                $data = htmlspecialchars($data);
                $data = stripslashes($data);
                echo "Checked, validated and sanitised: " . $data . "<br>";
                return $data;
            }
        }  
    }

    else{
        echo "Invalid data";
    }
}

/*
function check_string($data){
    if(isset($data) && is_string($data)){
        $data = strip_tags($data);
        $data = trim($data);
        $data = htmlentities($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        echo "Checked, validated and sanitised: " . $data . "<br>";
        return $data;
    }
    else{
        echo "INVALID DATA <br>";
    }
}

function check_email($data){
    if(isset($data)){
        $sanitised_email = filter_var($data, FILTER_SANITIZE_EMAIL);
        if(filter_var($data, FILTER_VALIDATE_EMAIL) && filter_var($sanitised_email, FILTER_VALIDATE_EMAIL)){
            $data = strip_tags($data);
            $data = trim($data);
            $data = htmlentities($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            echo "Checked, validated and sanitised: " . $data . "<br>";
            return $data;
        }
        else{
            echo "INVALID DATA <br>";
        }
    }
    else{
        echo "INVALID DATA <br>";
    }
}

function check_number($data){
    if(isset($data) && is_numeric($data)){
        $sanitised_number = filter_var($data, FILTER_SANITIZE_NUMBER_INT);
        if(filter_var($data, FILTER_SANITIZE_NUMBER_INT) && filter_var($sanitised_number, FILTER_SANITIZE_NUMBER_INT)){
            $data = strip_tags($data);
            $data = trim($data);
            $data = htmlentities($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            echo "Checked, validated and sanitised: " . $data . "<br>";
            return $data;
        }
        else{
            echo "INVALID DATA <br>";
        }
    }
    else{
        echo "INVALID DATA <br>";
    }
}
*/
?>
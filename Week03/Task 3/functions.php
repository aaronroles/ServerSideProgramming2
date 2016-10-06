<?php
    // Task 3

    //1. valid and acceptable

    $username = $password = "";

    $username = validate($_POST["username"]);
    $password = validate($_POST["password"]);

    function validate($data){
        if(isset($data) && is_string($data)){
            $data = strip_tags($data);
            $data = trim($data);
            $data = htmlentities($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            //echo $data . '<br>';
            return $data;
        }
    }

    //2. check values
    check($username, $password);

    function check($username, $password){
        if($username == "user1" && $password == "pass1"){
            message("Logged In - Welcome");
        }
        else{
            message("Invalid login");
        }
    }

    //3. display login message
    function message($text){
        echo '<script>alert("' . $text . '")</script>';
        //echo $text;
    }

?>
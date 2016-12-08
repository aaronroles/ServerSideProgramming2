<form method="POST" name="regForm">
    <input type="text" name="Username">
    <input type="password" name="Password">
    <input type="submit" name="SubmitRegForm">
</form>

<?php
if(isset($_POST["SubmitRegForm"])){
    $username = checkInput($_POST["Username"]);
    $password = checkInput($_POST["Password"]);
}

function checkInput($data){
    if(isset($data)){
        if(is_string($data)){
            $data = strip_tags($data);
            $data = trim($data);
            $data = htmlentities($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            echo $data."<br>";
            return $data;
        }
        else{
            echo "Not a string";
        }
    }
    else{
        echo "Not set";
    }
}
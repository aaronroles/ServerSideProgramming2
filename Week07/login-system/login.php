<?php
    try{
        $conn = new PDO("mysql:host=localhost;dbname=logintest", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected";
    }
    catch(PDOExecption $e){
        echo 'ERROR: '.$e->getMessage();
    }


     if(isset($_POST["submit"])){
         // Get username and password 
         $username = $_POST["username"];
         $password = $_POST["password"];
        // Check it against a database
        $stmt = $conn->prepare('SELECT username FROM users WHERE username = :username AND password = SHA1(:password)');
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        while ($row = $stmt->fetch()){
            var_dump($row);
        }
         // If true then successful login
         // If false then error 
     }
?>

<h1>Log In</h1>
<form method="POST" id="userLogin">
    <input type="text" id="username" name="username" placeholder="Username..."><br/>
    <input type="password" id="password" name="password" placeholder="Password..."><br/>
    <input type="submit" id="submit" name="submit" value="Log In"><br/>
</form>
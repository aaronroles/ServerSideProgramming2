<?php

    try{
        $conn = new PDO("mysql:host=localhost;dbname=logintest", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected";
    }
    catch(PDOExecption $e){
        echo 'ERROR: '.$e->getMessage();
    }

     if(isset($_POST["login"])){

         // Get username and password 
         $username = $_POST["username"];
         $password = $_POST["password"];

        // Check it against a database
        $stmt = $conn->prepare('SELECT username FROM users WHERE username = :username AND password = SHA1(:password)');
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

         // If we find a matching user, then success
         if($stmt->rowCount() == 1){
            // Let the user know they were successful
            //echo "user found :)";
            // Start a session
            session_start(); 
            $_SESSION["userSession"] = $username." is logged in";
            echo $_SESSION["userSession"];
        }
         // Otherwise we have no match, error 
        else{
            // Let user know there was an error
            echo "Username/Password not found";
        } 
     }

     if(isset($_POST["logout"])){
         session_start(); 
         //echo "Logging out";
         unset($_SESSION["userSession"]);
         //session_destroy();
     }
?>

<body>
    <!-- If session does not exist 
    then display the log in form -->
    <?php if (empty($_SESSION["userSession"])) { ?>
        <h1>Log In</h1>
        <form method="POST" id="userLogin">
            <input type="text" id="username" name="username" placeholder="Username..."><br/>
            <input type="password" id="password" name="password" placeholder="Password..."><br/>
            <input type="submit" id="login" name="login" value="Log In"><br/>
        </form> 
    <?php } ?>

    <!-- Otherwise if the session does exist 
    then tell the user they are logged in -->
    <?php if (!empty($_SESSION["userSession"])) { ?>
        <h1>Logged In</h1>
        <form method="POST" id="userLogout">
            <input type="submit" id="logout" name="logout" value="Log Out"><br/>
        </form> 
    <?php } ?>
</body>
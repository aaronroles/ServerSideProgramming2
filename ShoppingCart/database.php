<?php
    try{
        $db = new PDO("mysql:host=localhost;dbname=shopping", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //echo "Connected to db";

        if(isset($_POST["submitLogin"])){

            // Retrieve posted data
            $username = $_POST["username"];
            $password = SHA1($_POST["password"]);

            // Prepare DB statement to check if user exists
            $stmt = $db->prepare("SELECT username FROM users WHERE username = :username AND password = :password");

            // Bind posted data to variables
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);

            // Execute the DB query to find a match
            $stmt->execute();

            // Should only find one result as usernames are unique
            if($stmt->rowCount() == 1){
                // Start a session
                session_start(); 
                $_SESSION["userSession"] = "Welcome, ".$username;
                //echo $_SESSION["userSession"];
            }

            // Otherwise we have no match, error 
            else{
                // Let user know there was an error
                echo "Username/Password not found";
            }
        }

        if(isset($_POST["submitRegister"])){

            // Retrieve posted data
            $username = $_POST["username"];
            $password = SHA1($_POST["password"]);
            $email = $_POST["email"];
            $firstName = $_POST["firstname"];
            $lastName = $_POST["lastname"];

            // Prepare DB statement to insert new values
            $stmt = $db->prepare("INSERT INTO users(userId, username, password, email, firstName, lastName)  
            VALUES (NULL, :username, :password, :email, :firstName, :lastName");

            // Bind data 
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":firstName", $firstName);
            $stmt->bindParam(":lastName", $lastName);

            // Execute query
            $stmt->execute();
        }
    }

    catch(PDOException $e){
        echo "Error - ".$e->getMessage();
    }
?>
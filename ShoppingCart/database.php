<?php
    include("validation.php");

    try{
        $db = new PDO("mysql:host=localhost;dbname=shopping", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected to db";

        // LOGGING IN
        if(isset($_POST["submitLogin"])){

            // Retrieve posted data
            $username = $_POST["username"];
            $password = SHA1(validateString($_POST["password"]));

            // Prepare DB statement to check if user exists
            $stmt = $db->prepare('SELECT username FROM users WHERE username = :username AND password = :password');

            // Bind posted data to variables
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);

            // Execute the DB query to find a match
            $stmt->execute();

            // Should only find one result as usernames are unique
            if($stmt->rowCount() == 1){
                // Start a session
                $_SESSION["username"] = $username;
                $_SESSION["userSession"] = $username." is logged in";
            }

            // Otherwise we have no match, error 
            else{
                // Let user know there was an error
                echo "Username/Password not found";
            }
        }

        // REGISTER NEW USER
        if(isset($_POST["submitRegister"])){

            // Retrieve posted data
            $username = validateString($_POST["username"]);
            $password = SHA1(validateString($_POST["password"]));
            $email = validateEmail($_POST["email"]);
            $firstName = validateString($_POST["firstname"]);
            $lastName = validateString($_POST["lastname"]);

            // Prepare DB statement to insert new values
            $stmt = $db->prepare('INSERT INTO users (userId, username, password, email, firstName, lastName) 
            VALUES (NULL, :username, :password, :email, :firstName, :lastName)');

            // Bind data 
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":firstName", $firstName);
            $stmt->bindParam(":lastName", $lastName);

            // Execute query
            $stmt->execute();

            // Maybe look at automatically logging in a new user 
            // once they successfully register details

            $stmt = $db->prepare('SELECT username FROM users WHERE username = :username AND password = :password');

            // Bind posted data to variables
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);

            // Execute the DB query to find a match
            $stmt->execute();

            // Should only find one result as usernames are unique
            if($stmt->rowCount() == 1){
                // Start a session
                $_SESSION["username"] = $username;
                $_SESSION["userSession"] = "new user ".$username;
            }
        }

        // LOGGING OUT
        if(isset($_POST["submitLogout"])){
            unset($_SESSION["username"]);
            unset($_SESSION["userSession"]);
            //echo "Logged out";
        }

        // If an 'add to cart' button is posted
        if(isset($_POST["addToCart"])){
            // Store the id from a hidden input type
            $productId = $_POST["productId"];
            $_SESSION["myCart"] = array();
            array_push($_SESSION['myCart'], $productId);
            unset($productId);
            //print_r($_SESSION["myCart"]);   
        }
    }

    catch(PDOException $e){
        echo "Error - ".$e->getMessage();
    }
?>
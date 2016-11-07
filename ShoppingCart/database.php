<?php
    include("validation.php");

    try{
        // Create database connection to db named "shopping"
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
                // Create session variables
                $_SESSION["username"] = $username;
                $_SESSION["userSession"] = $username." is logged in";
            }

            // Otherwise we have no match, error 
            else{
                // Let user know there was an error
                include("html/loginError.php");
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

            // Begin statement to login in newly registered user
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
            // Remove all session variables if logged out
            unset($_SESSION["username"]);
            unset($_SESSION["userSession"]);
            unset($_SESSION["myCart"]);
        }

        // ADDING TO CART
        if(isset($_POST["addToCart"])){
            // Store the id from a hidden input type
            $productId = $_POST["productId"];
            // Push that id into the session cart array
            array_push($_SESSION['myCart'], $productId);
            unset($productId);
        }

        // REMOVE FROM CART 
        if(isset($_POST["delete"])){
            // Store product id in variable
            $productToRemove = $_POST["cartProductId"];
            // For every value->index pair in the cart array
            foreach($_SESSION["myCart"] as $index => $value){
                // If the value of an index is the same as a product's id 
                if($value == $productToRemove){
                    // Remove the product at that index
                    unset($_SESSION["myCart"][$index]);
                }
            }
        }

        // MAIL ORDER
        // This is done by using the PHPMailer library
        if(isset($_POST["placeOrder"])){
            // Require the library
            require('libs/PHPMailer-master/PHPMailerAutoload.php');

            $mail = new PHPMailer;
            $body = "";

            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "tls";
            $mail->Port = 587;
            $mail->Username = "aaronroles.shoppingcart@gmail.com";
            $mail->Password = "arshopcart1";
            $mail->setFrom("aaronroles.shoppingcart@gmail.com", "Aaron Roles");
            // Send to site owner
            $mail->addAddress("wtcchhh@gmail.com", "Aaron Roles");
            // Send to user
            // Find the user from database
            $stmt = $db->prepare("SELECT username, email FROM users WHERE username = :user");
            $stmt->bindParam(":user", $_SESSION["username"]);
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                $mail->addAddress($row['email'], $row['username']);
            }
            $mail->Subject = "Shopping Cart Order Confirmation";
            $body .= "<h1>Your Items</h1>";
            // For every cart item, find it in the database
            // and prepare an item for the email 
            foreach($_SESSION["myCart"] as $id){
                $stmt = $db->prepare("SELECT * FROM products WHERE productId = :productId");
                $stmt->bindParam(":productId", $id);
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    $body .= '<div class="cartProduct">';
                        $body .= '<h3>'.$row['productName'].' &euro;'.$row['productPrice'].'</h3>'; 
                        $body .= '<img src="'.$row["productImg"].'" width="250" height="175"/>';
                    $body .= '</div>';
                }
            }
            $body .= "<h1>Thank you, ".$_SESSION["username"] ."</h1>";
            // Attach the body to the email
            $mail->msgHtml($body);
            if(!$mail->send()){
                echo "Mail error - ". $mail->ErrorInfo;
            }
            else{
                // Inform the user the order is placed
                // and send the email
                echo '<script>alert("Order placed")</script>';
                unset($_SESSION["myCart"]); 
                $_SESSION["myCart"] = array();  
            }
        }
    }

    catch(PDOException $e){
        print_r($e->getMessage());
    }
?>
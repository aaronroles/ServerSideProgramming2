<?php
    try {
        $conn = new PDO('mysql:host=localhost; dbname=SSP2', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connected";

        # Prepare Query
        $stmt = $conn->prepare('INSERT INTO users VALUES ("", :emp_id, :name, SHA1(:password), :email)');
        $stmt->bindParam(':emp_Id', $empId);
        $stmt->bindParam(':name', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);

        # First Insertion
        $empId = 10;
        $username = 'keith';
        $password = 'keithpassword';
        $email = 'keith@email.co.uk';
        $stmt->execute();

    }
    catch(PDOExecption $e){
        echo 'ERROR: '.$e->getMessage();
    }

?>
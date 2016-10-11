<?php
    try {
        $conn = new PDO('mysql:host=localhost; dbname=SSP2', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected";
        $stmt = $conn->prepare('SELECT * FROM users WHERE emp_id = :id');

        $stmt->execute(array('id' => 5));

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo '<pre>';
            print_r($row);
            echo '</pre>';
        }
    }
    catch(PDOExecption $e){
        echo 'ERROR: '.$e->getMessage();
    }

?>
<?php
    try{
        $db = new PDO("mysql:host=localhost;dbname=shopping", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected to db";
    }
    catch(PDOException $e){
        echo "Error - ".$e->getMessage();
    }

    if(isset($_POST["submitLogin"])){
        // Working on index.php
    }

    if(isset($_POST["submitRegister"])){
        // Working on index.php
    }
?>
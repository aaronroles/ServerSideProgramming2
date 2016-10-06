<?php
    // Starting a session
    session_start();

    $value = "session2.php";

    // Assigning a value to the session
    $_SESSION["myFirstSession"] = $value;

    echo $_SESSION["myFirstSession"];
?>
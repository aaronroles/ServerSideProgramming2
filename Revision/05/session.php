<?php
    // Starting a session
    session_start();

    $value = "session.php";
    $anotherValue = "Still session1.php";

    // Assigning a value to the session
    $_SESSION["myFirstSession"] = $value;

    // Updating the session value
    $_SESSION["myFirstSession"] = $anotherValue;

    echo $_SESSION["myFirstSession"];
?>
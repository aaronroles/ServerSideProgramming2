<?php
    // Starting a session
    session_start();

    $value = "session1.php";
    $anotherValue = "Still session1.php";

    // Assigning a value to the session
    $_SESSION["myFirstSession"] = $value;

    // Updating the session value
    $_SESSION["myFirstSession"] = $anotherValue;

    echo $_SESSION["myFirstSession"];
?>

<a href="session2.php">Go to session 2</a>
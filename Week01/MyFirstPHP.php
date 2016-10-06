<?php
	echo 'Hello';
?>

<br>

<?php
	echo date("Y");
?>

<br>

<?php
    echo date("H:i:s jS F Y");
?>

<br>

<?php
    $age = 20;
	echo "John is $age years old <br>";
    echo 'John is ' . $age . ' years old <br>';
    echo 'John is $age years old';
?>

<br>

<?php
    define('VATRATE', 1.23);
    $price = 10;
    echo $price * VATRATE;
?>

<br>

<?php
    echo $_GET["username"];
?>
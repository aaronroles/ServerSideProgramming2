<?php
    include('HelloWorld.php');

    $obj = new HelloWorld();

    $obj->setProperty("I changed prop1");

    echo $obj->getProperty();
?>
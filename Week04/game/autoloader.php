<?php
    spl_autoload_register('myAutoloader');

    function myAutoloader($className){
        $path = './inc/';
        include $path.$className.'.php';
    }

?>
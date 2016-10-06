<?php
    define('CONST_NAME', 'This is the value of the constant');
    echo CONST_NAME . "<br/>";

    //////////////////////////////////////////////////////////////

    class MyClass{
        public static $myStatic = "Static var"; // Static variable 
        const VAT_RATE = 1.23;                  // Constant

        public function __construct(){
            echo self::VAT_RATE . "<br/>";      // Inside the class
        } 

        public static function myStaticFunction(){
            echo "Using a static function <br/>";
        }
    }

    echo MyClass::VAT_RATE . "<br/>";           // Outside the class
    $newClass = new MyClass();

    echo MyClass::$myStatic . "<br/>"; 
    $vat = new MyClass();
    //echo $vat->$myStatic;                     // Causes error
    echo MyClass::myStaticFunction();
    $vat->myStaticFunction();
?>
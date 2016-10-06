<?php
    define('TAX_13_5', '0.135');

    class Tax{
        const TAX_23 = 0.23;

        public function __construct($number){
            self::lowerRate($number);
            self::higherRate($number);
            echo "<br/>";
        }

        function lowerRate($num){
            echo "Lower rate: " . $num * TAX_13_5 . "<br/>";        // Outside the class
        }

        function higherRate($num){
            echo "Higher rate: " . $num * self::TAX_23 . "<br/>";   // Inside the class
        }
    }

    $myTax = new Tax(350);
    $yourTax = new Tax(500);
?>
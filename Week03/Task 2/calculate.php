<?php

    function calculate($num1, $num2, $op){
        if(is_numeric($num1) && is_numeric($num2)){
            if($op == "+"){
                addNums($num1, $num2);
            }

            if($op == "-"){
                subtractNums($num1, $num2);
            }

            if($op == "*"){
                multiplyNums($num1, $num2);
            }

            if($op == "/"){
                divideNums($num1, $num2);
            }
        }

        else{
            echo "Invalid data";
        }
    }

    function addNums($n1, $n2){
        echo $n1 + $n2;
    }

    function subtractNums($n1, $n2){
        echo $n1 - $n2;
    }

    function multiplyNums($n1, $n2){
        echo $n1 * $n2;
    }

    function divideNums($n1, $n2){
        echo $n1 / $n2;
    }
?>
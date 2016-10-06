<?php
    //echo phpversion(); 5.5.12

    $myArray = array('red','blue','green');
    echo $myArray[1] . "<br>";
    echo print_r($myArray) . "<br>";
    echo count($myArray) . "<br>";
    echo array_pop($myArray) . "<br>";
    echo array_push($myArray, "yellow") . "<br>";
    echo print_r($myArray) . "<br>";
    $newStr = "purple, black, white";
    $myArray = explode(",", $newStr);
    echo print_r($myArray) . "<br>";
    echo count($myArray) . "<br>";
    $otherStr = implode(",",$myArray);
    echo $otherStr . "<br>";

    echo "<br>";

    $pets_assoc = array(
        0 => array(
          'name' => 'Jenny', 
          'species' => 'Horse' 
        ),
        1 => array(
            'name' => 'Jazz',
            'species' => 'Dog'
        ),
    );
    foreach($pets_assoc as $sub_array){
        echo $sub_array['name'] . " - " . $sub_array['species'] . "<br/>";
    }

    echo "<br>";

    //$fourthNum = 10;

    function addNumbers($firstNum, $secondNum=0, $thirdNum=0){
        global $fourthNum;
        $fourthNum=3;
        echo $firstNum + $secondNum + $thirdNum + $fourthNum;
    }

    echo addNumbers(5,5,5) . "<br>";
    echo addNumbers(5,5) . "<br>";
    echo addNumbers(5) . "<br>";
    echo $fourthNum . "<br>";

    echo "<br>";

    $num1 = 7;
    function doubleNum(&$num1){
        echo $num1*=2;
    }
    echo doubleNum($num1) . "<br>";
    echo $num1 . "<br>";
?>
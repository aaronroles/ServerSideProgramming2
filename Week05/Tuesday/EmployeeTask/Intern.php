<?php
    class Intern extends Employee{
        function __construct($name, $empNo, $yearsService=0, $salary=0){
            parent::__construct($name, $empNo, $yearsService, $salary);
        }

        public function internStuff(){
            echo "Doing intern stuff <br/>";
        }
    }
?>
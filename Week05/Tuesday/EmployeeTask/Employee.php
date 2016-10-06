<?php
    class Employee{

        public $name;
        public $empNo;
        public $yearsService;
        public $salary;
        public $pension;

        public function __construct($name, $empNo, $yearsService, $salary){
            $this->name = $name;
            $this->empNo = $empNo;
            $this->yearsService = $yearsService;
            $this->salary = $salary;

            echo $this->name . "<br/>";
            echo $this->empNo . "<br/>";
            echo $this->yearsService . "<br/>";
            echo $this->salary . "<br/>";
            echo "<br/>";
        }

        protected function clockIn($empNo, $time = "09:00"){
            echo "Clocking in <br/>";
        }

        private function pension($yearsService, $salary){
            $this->pension = $yearsService * $salary;
        }
    }
?>
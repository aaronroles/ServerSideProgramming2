<?php
    class ProjectManager extends Employee{

        function __construct($name, $empNo, $yearsService, $salary){
            parent::__construct($name, $empNo, $yearsService, $salary);
        }

        public function manageProject($title, $dept, $endDate){
            echo "Managing the project <br/>";
        }

    }
?>
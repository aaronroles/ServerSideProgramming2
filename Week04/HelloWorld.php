<?php
    class HelloWorld{

        public $prop1 = "I am a class property";
        public $message = "Hello World";

        public function __construct(){
            echo $this->message . "<br>";
        }

        public function setProperty($newVal){
            $this->prop1 = $newVal;
        }

        public function getProperty(){
            return $this->prop1 . "<br>";
        }

        public function __destruct(){
            echo "Goodbye world <br>";
        }
        
    }
?>
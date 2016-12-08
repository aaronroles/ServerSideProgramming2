<?php

    class Compute{

        private $number1;
        private $number2;
        private $operator;

        public function __construct($num1, $num2, $op){
            $this->number1 = $num1;
            $this->number2 = $num2;
            $this->operator = $op;
            return $this->calculate($this->number1, $this->number2, $this->operator );
        }

        public function calculate($n1, $n2, $op){
            if(is_numeric($n1) && is_numeric($n2)){
                if($op == "+"){
                    echo $this->add($n1, $n2);
                }

                if($op == "-"){
                    echo $this->subtract($n1, $n2);
                }

                if($op == "*"){
                    echo $this->multiply($n1, $n2);
                }

                if($op == "/"){
                    echo $this->divide($n1, $n2);
                }
            }
        }

        public function add($n1, $n2){
            return $n1 + $n2;
        }

        public function subtract($n1, $n2){
            return $n1 - $n2;
        }

        public function multiply($n1, $n2){
            return $n1 * $n2;
        }

        public function divide($n1, $n2){
            return $n1 / $n2;
        }
    }

?>
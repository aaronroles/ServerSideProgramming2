<?php
    class Character{

        private $charName;
        private $charGender;
        private $charWeight;
        private $charCoins;

        public function __construct($name, $gender, $weight, $coins){
            echo "Creating character. . .";
            echo "<br>" . $this->charName = $name;
            echo "<br>" . $this->charGender = $gender;
            echo "<br>" . $this->charWeight = $weight;
            echo "<br>" . $this->charCoins = $coins;
            echo "<br>";
        }

        // List all information
        public function displayCharacter(){
            echo "<br>" . $this->charName;
            echo "<br>" . $this->charGender;
            echo "<br>" . $this->charWeight;
            echo "<br>" . $this->charCoins;
            echo "<br>";
        }

        // Name
        public function setCharName($newVal){
            $this->charName = $newVal;
        }

        public function getCharName(){
            return $this->charName . "<br>";
        }

        // Gender
        public function setCharGender($newVal){
            $this->charName = $newVal;
        }

        public function getCharGender(){
            return $this->charGender . "<br>";
        }

        // Weight
        public function setCharWeight($newVal){
            $this->charName = $newVal;
        }

        public function getCharWeight(){
            return $this->charWeight . "<br>";
        }

        // Coins
        public function setCharCoins($newVal){
            $this->charName = $newVal;
        }

        public function getCharCoins(){
            return $this->charCoins . "<br>";
        }

        //public function __destruct(){
        //    echo ". . .Character created";
        //}
    }
?>
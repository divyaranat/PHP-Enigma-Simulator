<?php
    Class Rotors {
        private $rotorOneObject;
        private $rotorTwoObject;
        private $rotorThreeObject;

        function __construct($rotorOneObject, $rotorTwoObject, $rotorThreeObject) {
            $this->rotorOneObject = $rotorOneObject;
            $this->rotorTwoObject = $rotorTwoObject;
            $this->rotorThreeObject = $rotorThreeObject;
        }

        function getRotorOne() {
            return $this->rotorOneObject;
        }

        function getRotorTwo() {
            return $this->rotorTwoObject;
        }
        
        function getRotorThree() {
            return $this->rotorThreeObject;
        }
    }
?>
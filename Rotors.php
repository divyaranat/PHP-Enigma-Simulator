<?php

    Class Rotors {
        private $rotorOneObject;
        private $rotorTwoObject;
        private $rotorThreeObject;
        private $reflector;

        function __construct($rotorOneObject, $rotorTwoObject, $rotorThreeObject, $reflector) {
            $this->rotorOneObject = $rotorOneObject;
            $this->rotorTwoObject = $rotorTwoObject;
            $this->rotorThreeObject = $rotorThreeObject;
            $this->reflector = $reflector;
        }

        function getRotorOne() {
            return $this->rotorOneObject->getRotorArray();
        }

        function getRotorOneTurnoverPoint() {
            return $this->rotorOneObject->getTurnoverPoint();
        }

        function getRotorTwo() {
            return $this->rotorTwoObject->getRotorArray();
        }

        function getRotorTwoTurnoverPoint() {
            return $this->rotorTwoObject->getTurnoverPoint();
        }
        
        function getRotorThree() {
            return $this->rotorThreeObject->getRotorArray();
        }

        function getReflector() {
            return $this->reflector;
        }
    }
?>
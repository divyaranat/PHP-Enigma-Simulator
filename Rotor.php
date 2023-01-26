<?php
    Class Rotor {
        private $turnoverPoint;
        private $rotorArray;

        function __construct($rotorArray, $turnoverPoint) {
            $this->rotorArray = $rotorArray;
            $this->turnoverPoint = $turnoverPoint;
        }

        function getTurnoverPoint() {
            return $this->turnoverPoint;
        }

        function getElement($x, $y){
            return $this->rotorArray[$x][$y];
        }

        function getCurrentElementAtTurnover() {
            return $this->rotorArray[0][25];
        }

        function rotateRotor() {
            $tempIndexHolderZero = $this->rotorArray[0][0];
            $tempIndexHolderOne = $this->rotorArray[1][0];

            for ($i = 0; $i < 25; ++$i) {
                $this->rotorArray[0][$i] = $this->rotorArray[0][$i + 1];
                $this->rotorArray[1][$i] = $this->rotorArray[1][$i + 1];
            }

            $this->rotorArray[0][25] = $tempIndexHolderZero;
            $this->rotorArray[1][25] = $tempIndexHolderOne;
        }

        function indexOf($target, $arraySelect) {
            return array_search($target, $this->rotorArray[$arraySelect]);

        }
    }
?>
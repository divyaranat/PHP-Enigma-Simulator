<?php
    Class Rotor {
        private $turnoverPoint;
        private $rotor;

        function __construct($rotor, $turnoverPoint) {
            $this->rotor = $rotor;
            $this->turnoverPoint = $turnoverPoint;
        }

        function getRotorArray() {
            return $this->rotor;
        }

        function getTurnoverPoint() {
            return $this->turnoverPoint;
        }
    }
?>
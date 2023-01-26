<?php
    Class ReflectorOne {
        private $reflectorArray;

        function __construct() {
            $this->reflectorArray = array (
                array ("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"),
                array ("Y","R","U","H","Q","S","L","D","P","X","N","G","O","K","M","I","E","B","F","Z","C","W","V","J","A","T")
            );
        }

        function getReflector() {
            return $this->reflectorArray;
        }

        function getElement($x, $y) {
            return $this->reflectorArray[$x][$y];
        }

        function indexOf($target, $arraySelect) {
            return array_search($target, $this->reflectorArray[$arraySelect]);
        }
    }
?>
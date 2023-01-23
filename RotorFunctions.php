<?php
    require "Rotor.php";
    require "Rotors.php";

    function rotateRotor($rotorArray) {
        $tempIndexHolderZero = $rotorArray[0][0];
        $tempIndexHolderOne = $rotorArray[0][1];

        for ($i = 0; $i < 25; $i++) {
            $rotorArray[0][$i] = $rotorArray[0][$i + 1];
            $rotorArray[1][$i] = $rotorArray[1][$i + 1];
        }

        $rotorArray[0][25] = $tempIndexHolderZero;
        $rotorArray[1][25] = $tempIndexHolderOne;
    }

    function indexOf($rotorArray, $result, $arraySelect) {
        for ($i = 0; $i <= 25; $i++) {
            if ($rotorArray[$arraySelect][$i] == $result) {
                return $i;
            }
        }
    }

    function traverseRotors($letterMessage, $rotorsObject) {
        $rotorOneArray = $rotorsObject->getRotorOne();
        $rotorTwoArray = $rotorsObject->getRotortwo();
        $rotorThreeArray = $rotorsObject->getRotorThree();
        $reflectorArray = $rotorsObject->getReflector();

        $rotorOneTurnoverPoint = $rotorsObject->getRotorOneTurnoverPoint();
        $rotorTwoTurnoverPoint = $rotorsObject->getRotorTwoTurnoverPoint();

        rotateRotor($rotorOneArray);
        $rotorOneCurrentTurnoverPoint = $rotorOneArray[0][25];

        if ($rotorOneTurnoverPoint == $rotorOneCurrentTurnoverPoint) {
            rotateRotor($rotorTwoArray);
            $rotorTwoCurrentTurnoverPoint = $rotorTwoArray[0][25];

            if ($rotorTwoTurnoverPoint == $rotorTwoCurrentTurnoverPoint) {
                rotateRotor($rotorTwoArray);
            }
        }
    }
?>
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
        $rotorOne = $rotorsObject->getRotorOne();
        $rotorTwo = $rotorsObject->getRotortwo();
        $rotorThree = $rotorsObject->getRotorThree();
        $reflector = $rotorsObject->getReflector();

        $rotorOneTurnoverPoint = $rotorsObject->getRotorOneTurnoverPoint();
        $rotorTwoTurnoverPoint = $rotorsObject->getRotorTwoTurnoverPoint();

        rotateRotor($rotorOne);
        $rotorOneCurrentTurnoverPoint = $rotorOne[0][25];

        if ($rotorOneTurnoverPoint == $rotorOneCurrentTurnoverPoint) {
            rotateRotor($rotorTwo);
            $rotorTwoCurrentTurnoverPoint = $rotorTwo[0][25];

            if ($rotorTwoTurnoverPoint == $rotorTwoCurrentTurnoverPoint) {
                rotateRotor($rotorThree);
            }
        }

        $letNum = indexOf($reflector, $letterMessage, 0);

        $resultOne = $rotorOne[1][$letNum];
        $resultTwo = $rotorTwo[1][indexOf($rotorOne, $resultOne, 0)];
        $resultThree = $rotorThree[1][indexOf($rotorTwo, $resultTwo, 0)];

        $reflectorLetter = $reflector[1][indexOf($rotorThree, $resultThree, 0)];

        $resultThree = $rotorThree[0][indexOf($reflector, $reflectorLetter, 0)];
        $resultThree = $rotorThree[0][indexOf($rotorThree, $resultThree, 1)];

        $resultTwo = $rotorTwo[0][indexOf($rotorThree, $resultThree, 0)];
        $resultTwo = $rotorTwo[0][indexOf($rotorTwo, $resultTwo, 1)];

        $resultOne = $rotorOne[0][indexOf($rotorTwo, $resultTwo, 0)];
        $resultOne = $rotorOne[0][indexOf($rotorOne, $resultOne, 1)];

        $finalResult = $reflector[0][indexOf($rotorOne, $resultOne, 0)];
        return $finalResult;
    }
?>
<?php
    require_once "Rotor.php";
    require_once "Reflector.php";

    function traverseRotors($letterMessage, $rotorOneObject, $rotorTwoObject, $rotorThreeObject, $reflectorObject) {
        $rotorOneTurnoverPoint = $rotorOneObject->getTurnoverPoint();
        $rotorTwoTurnoverPoint = $rotorTwoObject->getTurnoverPoint();

        $rotorOneObject->rotateRotor();
        $rotorOneCurrentTurnoverPoint = $rotorOneObject->getCurrentElementAtTurnover();

        if ($rotorOneTurnoverPoint == $rotorOneCurrentTurnoverPoint) {
            $rotorTwoObject->rotateRotor();
            $rotorTwoCurrentTurnoverPoint = $rotorTwoObject->getCurrentElementAtTurnover();

            if ($rotorTwoTurnoverPoint == $rotorTwoCurrentTurnoverPoint) {
                $rotorThreeObject->rotateRotor();
            }
        }

        $letNum = $reflectorObject->indexOf($letterMessage, 0);

        $resultOne = $rotorOneObject->getElement(1, $letNum);

        $resultTwo = $rotorTwoObject->getElement(1, $rotorOneObject->indexOf($resultOne, 0));

        $resultThree = $rotorThreeObject->getElement(1, $rotorTwoObject->indexOf($resultTwo, 0));

        $reflectorLetter = $reflectorObject->getElement(1, $rotorThreeObject->indexOf($resultThree, 0));

        $resultThree = $rotorThreeObject->getElement(0, $reflectorObject->indexOf($reflectorLetter, 0));
        $resultThree = $rotorThreeObject->getElement(0, $rotorThreeObject->indexOf($resultThree, 1));

        $resultTwo = $rotorTwoObject->getElement(0, $rotorThreeObject->indexOf($resultThree, 0));
        $resultTwo = $rotorTwoObject->getElement(0, $rotorTwoObject->indexOf($resultTwo, 1));

        $resultOne = $rotorOneObject->getElement(0, $rotorTwoObject->indexOf($resultTwo, 0));
        $resultOne = $rotorOneObject->getElement(0, $rotorOneObject->indexOf($resultOne, 1));

        $finalResult = $reflectorObject->getElement(0, $rotorOneObject->indexOf($resultOne, 0));
        return $finalResult;
    }

    function getRotorPositions($rotorOneObject, $rotorTwoObject, $rotorThreeObject) {
        return $rotorOneObject->getElement(0, 0) . " " . $rotorTwoObject->getElement(0, 0) . " " . $rotorThreeObject->getElement(0 ,0);
    }

    function setRotorPositions($rotorOnePosition, $rotorTwoPosition, $rotorThreePosition, &$rotorObjects) {
        while ($rotorOnePosition != $rotorObjects[0]->getElement(0, 0)) {
            $rotorObjects[0]->rotateRotor();
        }

        while ($rotorTwoPosition != $rotorObjects[1]->getElement(0, 0)) {
            $rotorObjects[1]->rotateRotor();
        }

        while ($rotorThreePosition != $rotorObjects[2]->getElement(0, 0)) {
            $rotorObjects[2]->rotateRotor();
        }
    }
?>
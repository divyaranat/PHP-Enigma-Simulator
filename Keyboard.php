<?php
    require_once "RotorFunctions.php";

    function &rotorSelectionPrompt(){
        echo "Pick 3 rotors to use in simulator.\n";
        echo "Options: I II III IV V\n";

        $rotorPositionOne = strtoupper(readline("First rotor: "));

        do {
            $continueLoop = false;
            $rotorPositionTwo = strtoupper(readline("Second rotor: "));
            if (strcmp($rotorPositionOne, $rotorPositionTwo) == 0) {
                echo "Rotor " . $rotorPositionTwo . " has already been selected. Please choose a different rotor.\n";
                $continueLoop = true;
            }
        } while ($continueLoop);

        do {
            $continueLoop = false;
            $rotorPositionThree = strtoupper(readline("Third rotor: "));
            if (strcmp($rotorPositionOne, $rotorPositionThree) == 0 || strcmp($rotorPositionTwo, $rotorPositionThree) == 0) {
                echo "Rotor " . $rotorPositionThree . " has already been selected. Please choose a different rotor.\n";
                $continueLoop = true;
            }
        } while ($continueLoop);

        echo "Rotor selection complete.\n\n";

        require "RotorSettings.php";
        $rotorObjects = &rotorSelection($rotorPositionOne, $rotorPositionTwo, $rotorPositionThree);
        return $rotorObjects;
    }

    function messageInput() {
        do {
            $message = strtoupper(readline("Enter message: "));

            $message = str_replace("   ", "  ", $message);
            $message = str_replace("  ", " ", $message);
            $spacelessMessage = str_replace(" ", "", $message);

            $continueLoop = false;
            foreach (str_split($spacelessMessage) as $char) {
                if (!ctype_alpha($char)) {
                    echo "Error: '" . $char . "' is not a letter. Please enter message again.\n";
                    $continueLoop = true;
                }
            }
        } while ($continueLoop);

        echo "\n";
        return $spacelessMessage;
    } 

    function encryptionInfo(&$rotorObjects) {
        echo "Initial rotor settings: " . getRotorPositions($rotorObjects[0], $rotorObjects[1], $rotorObjects[2]) . "\n";
        echo "Encrypted message: ";
    }

    function decryptionInfo() {
        echo "Decrypted message: ";
    }

    function launchToRotor($message, &$rotorObjects) {
        $rotorOneObject = $rotorObjects[0];
        $rotorTwoObject = $rotorObjects[1];
        $rotorThreeObject = $rotorObjects[2];
        $reflectorObject = $rotorObjects[3];

        foreach (str_split($message) as $letterMessage) {
            echo traverseRotors($letterMessage, $rotorOneObject, $rotorTwoObject, $rotorThreeObject, $reflectorObject);
        }
        echo "\n\n";
    }

    function selectRotorPositions(&$rotorObjects) {
        echo "Input rotor settings.\n";
        $rotorOnePosition = strtoupper(readline("Rotor One: "));
        $rotorTwoPosition = strtoupper(readline("Rotor Two: "));
        $rotorThreePosition = strtoupper(readline("Rotor Three: "));
        setRotorPositions($rotorOnePosition, $rotorTwoPosition, $rotorThreePosition, $rotorObjects);
    }

    function resetRotorPositions(&$rotorObjects) {
        setRotorPositions("A", "A", "A", $rotorObjects);
    }
?>
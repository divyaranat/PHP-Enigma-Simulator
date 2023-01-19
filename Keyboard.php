<?php
    require "RotorSettings.php";

    function rotorSelectionPrompt(){
        echo "Pick 3 rotors to use in simulator.";
        echo "Options: I II III IV V";

        $rotorPositionOne = strtoupper(readline("First rotor: "));

        do {
            $continueLoop = false;
            $rotorPositionTwo = strtoupper(readline("Second rotor: "));
            if (strcmp($rotorPositionOne, $rotorPositionTwo) == 0) {
                echo "Rotor " . $rotorPositionTwo . " has already been selected. Please choose a different rotor.";
                $continueLoop = true;
            }
        } while ($continueLoop);

        do {
            $continueLoop = false;
            $rotorPositionThree = strtoupper(readline("Third rotor: "));
            if (strcmp($rotorPositionOne, $rotorPositionThree) == 0 || strcmp($rotorPositionTwo, $rotorPositionThree) == 0) {
                echo "Rotor " . $rotorPositionThree . " has already been selected. Please choose a different rotor.";
                $continueLoop = true;
            }
        } while ($continueLoop);

        echo "Rotor selection complete\n\n";

       rotorSelection($rotorPositionOne, $rotorPositionTwo, $rotorPositionThree);
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
    } 

    function encryptionInfo() {

    }

    function launchToRotor() {

    }

    function selectRotorPositions() {

    }
?>
<?php
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

    }

    function messageInput() {

    }

    function messageFilter() {

    }

    function encryptionInfo() {

    }

    function launchToRotor() {

    }

    function selectRotorPositions() {

    }
?>
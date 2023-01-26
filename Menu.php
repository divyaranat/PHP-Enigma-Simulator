<?php
    require_once "Keyboard.php";
    
    echo "\n---ENIGMA EMULATOR---\n\n";
    $rotorObjects = &rotorSelectionPrompt();

    $continueLoop = true;
    do {
        echo "-MENU-\n";
        echo "'N': Encrypt a New Message\n";
        echo "'D': Decrypt a Message\n";
        echo "'S': Set Rotor Positions\n";
        echo "'R': Reset Rotor Positions\n";
        echo "'Q': Quit\n";
        $menuSelection = strtoupper(readline("Selection: "))[0];

        switch ($menuSelection) {
            case "N":
                echo "\n---Encryption---\n";
                $message = messageInput();
                encryptionInfo($rotorObjects);
                launchToRotor($message, $rotorObjects);
                break;
            case "D":
                echo "\n---Decryption---\n";
                selectRotorPositions($rotorObjects);
                $message = messageInput();
                decryptionInfo();
                launchToRotor($message, $rotorObjects);
                break;
            case "S":
                echo "\n---Set Rotor Positions---\n";
                selectRotorPositions($rotorObjects);
                echo "\n";
                break;
            case "R":
                resetRotorPositions($rotorObjects);
                echo "\nRotors have been reset.\n\n";
                break;
            case "Q":
                $continueLoop = false;
                echo "\nGood-Bye!\n\n";
                break;
            default:
                echo "Invalid entry. Please try again.";
        }
    } while ($continueLoop);
?>
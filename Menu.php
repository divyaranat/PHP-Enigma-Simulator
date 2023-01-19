<?php
    require "Keyboard.php";

    $menuSelection = null;
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
                echo "---Encryption---\n";
                messageInput();
                break;
            case "D":
                break;
            case "S":
                break;
            case "R":
                break;
            case "Q":
                $continueLoop = false;
                break;
            default:
                echo "Invalid entry. Please try again.";
        }
    } while ($continueLoop);
?>
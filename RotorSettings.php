<?php
    function &rotorSelection($rotorPositionOne, $rotorPositionTwo, $rotorPositionThree) {
        $rotorOneArray = array (
            array ("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"),
            array ("E","K","M","F","L","G","D","Q","V","Z","N","T","O","W","Y","H","X","U","S","P","A","I","B","R","C","J")
        );

        $rotorTwoArray = array (
            array ("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"),
            array ("A","J","D","K","S","I","R","U","X","B","L","H","W","T","M","C","Q","G","Z","N","P","Y","F","V","O","E")
        );

        $rotorThreeArray = array (
            array ("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"),
            array ("B","D","F","H","J","L","C","P","R","T","X","V","Z","N","Y","E","I","W","G","A","K","M","U","S","Q","O")
        );

        $rotorFourArray = array (
            array ("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"),
            array ("E","S","O","V","P","Z","J","A","Y","Q","U","I","R","H","X","L","N","F","T","G","K","D","C","M","W","B")
        );

        $rotorFiveArray = array (
            array ("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"),
            array ("V","Z","B","R","G","I","T","Y","U","P","S","D","N","H","L","X","A","W","M","J","Q","O","F","E","C","K")
        );

        switch ($rotorPositionOne) {
			case "I":
				$positionOneRotor = $rotorOneArray;
				$positionOneTurnoverPoint = "Q";
                break;
			case "II":
				$positionOneRotor = $rotorTwoArray;
				$positionOneTurnoverPoint = "E";
                break;
			case "III":
				$positionOneRotor = $rotorThreeArray;
				$positionOneTurnoverPoint = "V";
                break;
			case "IV":
				$positionOneRotor = $rotorFourArray;
				$positionOneTurnoverPoint = "J";
                break;
			case "V":
				$positionOneRotor = $rotorFiveArray;
				$positionOneTurnoverPoint = "Z";
                break;
			default:
				echo "Error: rotor one switch";
				$positionOneTurnoverPoint = null;
		}

        switch ($rotorPositionTwo) {
			case "I":
				$positionTwoRotor = $rotorOneArray;
				$positionTwoTurnoverPoint = "Q";
                break;
			case "II":
				$positionTwoRotor = $rotorTwoArray;
				$positionTwoTurnoverPoint = "E";
                break;
			case "III":
				$positionTwoRotor = $rotorThreeArray;
				$positionTwoTurnoverPoint = "V";
                break;
			case "IV":
				$positionTwoRotor = $rotorFourArray;
				$positionTwoTurnoverPoint = "J";
                break;
			case "V":
				$positionTwoRotor = $rotorFiveArray;
				$positionTwoTurnoverPoint = "Z";
                break;
			default:
				echo "Error: rotor one switch";
				$positionTwoTurnoverPoint = null;
		}

        switch ($rotorPositionThree) {
			case "I":
				$positionThreeRotor = $rotorOneArray;
				$positionThreeTurnoverPoint = "Q";
                break;
			case "II":
				$positionThreeRotor = $rotorTwoArray;
				$positionThreeTurnoverPoint = "E";
                break;
			case "III":
				$positionThreeRotor = $rotorThreeArray;
				$positionThreeTurnoverPoint = "V";
                break;
			case "IV":
				$positionThreeRotor = $rotorFourArray;
				$positionThreeTurnoverPoint = "J";
                break;
			case "V":
				$positionThreeRotor = $rotorFiveArray;
				$positionThreeTurnoverPoint = "Z";
                break;
			default:
				echo "Error: rotor one switch";
				$positionThreeTurnoverPoint = null;
		}

        require_once "Rotor.php";
        $rotorOneObject = new Rotor($positionOneRotor, $positionOneTurnoverPoint);
        $rotorTwoObject = new Rotor($positionTwoRotor, $positionTwoTurnoverPoint);
        $rotorThreeObject = new Rotor($positionThreeRotor, $positionThreeTurnoverPoint);

        require_once "Reflector.php";
        $reflectorObject = new ReflectorOne();

        $rotorObjectArray = array($rotorOneObject, $rotorTwoObject, $rotorThreeObject, $reflectorObject);
        return $rotorObjectArray;
    }

<?php
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
?>
<?php

    declare(strict_types=1); //stop automatic conversions

    function printOddNumbers(int $limit, $skipNumber) {
        for( $index = 0 ; $index <= $limit ; $index++) {
            if ($index == $skipNumber){
                continue;
            } elseif($index%2 == 1){
                echo "Odd number: $index <br>";
            }
        }
    }

    printOddNumbers(20, "3");//number 20 must be in integer
?>
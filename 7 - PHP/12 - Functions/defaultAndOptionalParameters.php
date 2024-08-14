<?php

    declare(strict_types=1);

    function printOddNumbers(int $limit, $skipNumber = -1) { //optional value -> should be at the last parameters
        for( $index = 0 ; $index <= $limit ; $index++) {
            if ($index == $skipNumber){
                continue;
            } elseif($index%2 == 1){
                echo "Odd number: $index <br>";
            }
        }
    }
    printOddNumbers(20); //can be run without the skipNumber param


    function printEvenNumbers(int $limit, $skipNumber = -1) {
        for( $index = 0 ; $index <= $limit ; $index++) {
            if ($index == $skipNumber){
                continue;
            } elseif($index%2 == 0){
                echo "Even number: $index <br>";
            }
        }
    }
    printEvenNumbers(10);
?>
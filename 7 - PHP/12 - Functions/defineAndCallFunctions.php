<?php

    /*
        function function_name (param1, ... , param_n){
            Statement_1;

            return return_value;
        }

    */

    //define a function
    function printEvenNumbers($limit) {
        for( $index = 0 ; $index <= $limit ; $index++) {
            if($index%2 == 0){
                echo "Even number: $index <br>";
            }
        }
    }

    //calling a function
    printEvenNumbers(10);
    printEvenNumbers("10"); //also can be printed

    function add($a, $b) {
        return $a + $b;
    }

    echo "Addition of 10 and 20 : ".add(10, 20)."<br>";
?>
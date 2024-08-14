<?php

    /*
        function function_name (param1, ... , param_n){
            Statement_1;

            return return_value;
        }

    */

    /*
        function function_name (param1, ... , param_n) : return type {
            Statement_1;

            return return_value;
        }

    */

    function add($a, $b) : int {
        $addition = $a + $b;
        return $addition;
    }

    echo "Result: ".add (1,2)."<br>";

    function getEvenNumbers($limit) : array{
        $returnArr = [];
        for ( $index = 0 ; $index <= $limit ; $index++){
            if($index%2==0){
                $returnArr[] = $index;
            }
        }

        return $returnArr;
    }

    $evenNumbers = getEvenNumbers(10);
    print_r($evenNumbers);
    echo "<br>";
?>
<?php

    // Continue will skip the next line and go to the next loop

    // Print even numbers using while infinite loop and break after 10 numbers

    $value = 1;
    while(true){
        $result = $value%2;

        if ($result == 1){
            $value++;
            continue;
        }
        echo "Even numbers: ". $value. "<br>";
        $value++;
    }
?>
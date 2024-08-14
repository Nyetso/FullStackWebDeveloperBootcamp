<?php

    // do-While loop
    // do {
    //  //code to be executed
    // }while (condition);

    $max_value = 100;
    $value1 = 2;
    do {
        echo "Square: ". $value1 . "<br>";
        $value1 *= 2;
    }while ($value1 <= $max_value);
?>
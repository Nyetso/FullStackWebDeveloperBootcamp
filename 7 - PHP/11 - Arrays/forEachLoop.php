<?php

    /*

        foreach ( $array as $value) {
            // Code to be executed
            // all data types can be stored and displayed
        }

    */
    $array = [
        "Mon",
        "Tues",
        "Wed",
        "Thur",
        "Fri",
        "Sat",
        "sun"
    ];

    $counter = 0;
    foreach ($array as $arr) {
        echo "[$counter] => " . $arr . " => $array[$counter]" . "<br>";
        $counter++;
    }
    echo "<br>";
?>
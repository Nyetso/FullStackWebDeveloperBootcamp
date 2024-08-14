<?php

    // indexed arrays are sequence array of element with integer index numbers
    // mostly it is in sequence
    // index starts with 0
    // new elements get the index of highest index + 1 number
    // can always break the sequence and add new elements to future index

    $arr = [ 1, 2, 3, 4, 5 ];
    var_dump($arr);
    echo "<br>";

    $arr [100] = 100;
    var_dump($arr);
    echo "<br>";

    $arr [] = 101;
    var_dump($arr);
    echo "<br>";

    $arr = [
        "Mon",
        "Tues",
        "Wed",
        "Thur",
        "Fri",
        "Sat",
        "sun"
    ];
    var_dump($arr);
    echo "<br>";
?>
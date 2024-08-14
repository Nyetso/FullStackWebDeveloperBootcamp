<?php

    //sort() and rsort()

    //Indexed array
    $arr = [ 5, 2, 4, 0, 1, 3];
    print_r($arr);
    echo "<br>";
    sort($arr); //ascending
    print_r($arr);
    echo "<br>";
    rsort($arr); //descending
    print_r($arr);
    echo "<br><br>";

    //asort() and arsort()
    //associative array
    $arr1 = [
        "3" => "John",
        "1" => "Ajit",
        "2" => "Roger"
    ];
    print_r($arr1);
    echo "<br>";
    asort($arr1); //ascending
    print_r($arr1);
    echo "<br>";
    arsort($arr1); //descending
    print_r($arr1);
    echo "<br><br>";

    //ksort() and krsort() - sorting using keys
    print_r($arr1);
    echo "<br>";
    ksort($arr1); //ascending
    print_r($arr1);
    echo "<br>";
    krsort($arr1); //descending
    print_r($arr1);
    echo "<br><br>";
?>
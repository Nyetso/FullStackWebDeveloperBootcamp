<?php

    // In associative array, you have to specify the index
    // index => value
    // => is a special symbol to represent key and value
    // key => value - key is the index, value is the value at that index

    //index array
    $array = [
        "Mon",
        "Tues",
        "Wed",
        "Thur",
        "Fri",
        "Sat",
        "sun"
    ];
    var_dump($array);
    echo "<br>";
    foreach ($array as $arr) {
        echo $arr."<br>";
    }
    echo "<br>";

    //Associative array
    $array = [
        "Monday" => "Mon",
        1 => "Tues",
        2 => "Wed",
        3 => "Thur",
        4 => "Fri",
        5 => "Sat",
        6 => "sun"
    ];
    var_dump($array);
    echo "<br>";
    foreach ($array as $key => $arr) {
        echo $key . " => " . $arr . "<br>";
    }
    echo "<br>";

    //print all the keys
    print_r(array_keys($array));
    echo "<br><br>";

    //access only the keys
    foreach (array_keys($array) as $key) {
        echo $key . "<br>";
    }
    echo "<br>";

    //access only the values
    foreach ($array as $value) {
        echo $value . "<br>";
    }
    echo "<br>";

    //User datails
    $userDetails = [
        "name" => "John",
        "email" => "john@gmail.com"
    ];
    var_dump($userDetails);
    echo "<br>";
    foreach ($userDetails as $key => $arr) {
        echo $key . " => " . $arr . "<br>";
    }
    echo "<br>";

    $userDetails = [
        "John" => "john@gmail.com",
        "Jenny" => "jenny@gmail.com",
        "Ajit" => "ajit@gmail.com"
    ];
    var_dump($userDetails);
    echo "<br>";
    foreach ($userDetails as $key => $arr) {
        echo $key . " => " . $arr . "<br>";
    }
    echo "<br>";

    echo $userDetails["John"]."<br>";
    echo $userDetails["Jenny"]."<br>";
    echo $userDetails["Ajit"]."<br>";
    echo "<br>";

    //add new element
    $userDetails = [
        "John" => "john@gmail.com",
        "Jenny" => "jenny@gmail.com",
        "Ajit" => "ajit@gmail.com"
    ];

    $userDetails["Jane"] = "jane@gmail.com";
    var_dump($userDetails);
    echo "<br>";
    foreach ($userDetails as $key => $arr) {
        echo $key . " => " . $arr . "<br>";
    }
    echo "<br>";
?>
<?php

    // Define an array
    // reference: https://www.php.net/manual/en/language.types.array.php
    // cannot use echo to print array
    // $array -> Array variable
    // $array[0] -> Array element
    // 0 -> Index of array
    // Array can store any type of values
    // Array can be inside of an array
    // usecase: collection of variables together

    $array = [
        1,
        "2",
        3.2
    ];

    //function to display an array
    var_dump($array);
    echo "<br>";

    //human readable
    print_r($array);
    echo "<br><br>";

    //access and print arrays
    echo $array[0]."<br>";//single array access and print
    echo $array[1]."<br>";//single array access and print
    echo $array[2]."<br><br>";//single array access and print

    echo "Array Length: " . count($array) . "<br>";

    //loop through an array
    for($count=0 ; $count < count($array) ; $count++){
        echo $array[$count]."<br>";
    }
    echo "<br>";
    foreach ($array as $arr){
        echo $arr."<br>";
    }
    echo "<br>";

    //access array elements inside the string using constant
    // const ARRAY_ELEMENT = 1;
    // echo "$array[ARRAY_ELEMENT]"."<br>"; // Error

    //change array element
    print_r($array);
    $array[0] = 5;
    $array[1] = 6;
    $array[2] = 7;
    echo "<br>";
    print_r($array);
    echo "<br><br>";
    $array[0] = "This is a string";
    $array[1] = true;
    $array[2] = 7.5;
    print_r($array);
    echo "<br><br>";

    //see the indentations of array
    $array2 = [
        1,
        "string",
        false,
        23.2
    ];
    print_r($array2);
    echo "<br>";
    var_dump($array2);
    echo "<br><br>";
?>
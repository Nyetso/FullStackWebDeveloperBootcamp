<?php

    // [] => empty array

    //empty array
    $array =[];
    foreach($array as $arr) {
        var_dump($arr);
        print_r($arr);
    }

    //check if the array is empty
    if (empty($array)) {
        echo "Array is empty. <br>";
    } else {
        echo "Array is not empty. <br>";
    }

    //index holds an array
    $array[0] = [10];
    var_dump($array);

    //reset the array
    $array = [];
    var_dump($array);
?>
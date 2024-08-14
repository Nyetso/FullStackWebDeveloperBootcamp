<?php

    //Sample 1
    $arr = [0, 1, 2, 3, 4, 5];
    $arr1 = $arr;
    var_dump($arr1);
    echo "<br>";

    //Sample 2
    foreach ($arr as $values){
        $arr2[] = $values;
    }
    var_dump($arr2);
    echo "<br>";

    //Sample 3
    $arr3 = [
        "3" => "john",
        "1" => "Ajit",
        "2" => "Roger"
    ];
    $arr4 = $arr3;
    var_dump($arr4);
    echo "<br>";

    //Sample 4
    $arr5 = [];
    foreach($arr4 as $key => $value){
        $arr5[$key] = $value;
    }
    var_dump($arr5);
    echo "<br>";
?>
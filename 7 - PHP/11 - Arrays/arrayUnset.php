<?php

    $arr = [ 0, 1, 2, 3, 4, 5];
    print_r($arr);
    echo "<br>";

    unset ($arr[5]);
    print_r($arr);
    echo "<br>";

    $arr[] = 5;
    print_r($arr);
    echo "<br><br>";

    $arr1 = [ "first" => 1, 2, 3, 4, "last" => 5];
    print_r($arr1);
    echo "<br>";

    unset ($arr1["last"]);
    print_r($arr1);
    echo "<br>";

    $arr1["last"] = 5;
    print_r($arr1);
    echo "<br>";

    $arr1[] = 6;
    print_r($arr1);
    echo "<br><br>";

?>
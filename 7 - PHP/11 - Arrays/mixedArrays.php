<?php

    //if index is not specified, PHP will use the increment of the largest previously used integer key.

    $arr = [];
    $arr[0] = 1;
    $arr[2] = "String";
    $arr[4] = true;
    $arr[10] = 14.5;

    //adding new values to array
    $arr[100] = "New string 1";
    $arr[] = "New string 2";

    //output
    var_dump($arr);
    echo "<br><br>";

    $arr[0] = "changes int to string";

    foreach($arr as $arr){
        echo $arr."<br>";
    }
?>
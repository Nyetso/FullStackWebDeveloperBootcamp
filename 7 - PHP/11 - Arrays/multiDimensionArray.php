<?php

    // Array inside an array is called multi dimensional array
    // Array holding one or more arrays

    //Single dimension
    $arr = [ 1, 2, 3, 4, 5 ];
    var_dump($arr);
    echo "<br><br>";

    //single dimension - associative array
    $userDetails = [
        "John" => "john@gmail.com",
        "Jenny" => "jenny@gmail.com",
        "Ajit" => "ajit@gmail.com"
    ];
    var_dump($userDetails);
    echo "<br><br>";

    //multi dimension array with index
    $arr2 = [
        [ 0, 1, 2, 3, 4, 5],
        [ 6, 7, 8, 9, 10, 11],
        [ 12, 13, 14, 15, 16,17]
    ];
    var_dump($arr2);
    echo "<br><br>";

    foreach ($arr2 as $singleArray){
        var_dump($singleArray);
        echo "<br>";
    }
    echo "<br>";

    foreach ($arr2 as $singleArray){
        echo "[";
        foreach ($singleArray as $values){
            echo $values.", ";
        }
        echo "], <br>";
    }
    echo "<br>";

    $arr3 = [
        "emailList1" => [
            "John" => "john@gmail.com",
            "Jenny" => "jenny@gmail.com",
            "Ajit" => "ajit@gmail.com"
        ],
        "emailList2" => [
            "John2" => "john2@gmail.com",
            "Jenny2" => "jenny2@gmail.com",
            "Ajit2" => "ajit2@gmail.com"
        ],    
    ];
    foreach ($arr3 as $singleArray){
        echo "[";
        foreach ($singleArray as $values){
            echo $values.", ";
        }
        echo "], <br>";
    }
    echo "<br>";

    foreach ($arr3 as $key => $singleArray){
        echo "Values for key: $key => [";
        foreach ($singleArray as $values){
            echo $values.", ";
        }
        echo "], <br>";
    }
    echo "<br>";
?>
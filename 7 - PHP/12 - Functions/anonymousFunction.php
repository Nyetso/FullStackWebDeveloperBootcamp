<?php


    //Anonymous function => does not have a function name
    //Also called as closures

    // function add($a, $b) : int {
    //     $addition = $a + $b;
    //     return $addition;
    // }

    $addFunction = function ($a, $b) : int {
        $addition = $a + $b;
        return $addition;
    };
    echo "Addition: ".$addFunction (1, 2). "<br>";

    $content = "This is a string message";

    $printContent = function () use ($content) {
        echo $content."<br>";
    };

    $printContent();
?>
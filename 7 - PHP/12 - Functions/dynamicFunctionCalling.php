<?php

    function add($a, $b) : int {
        $addition = $a + $b;
        return $addition;
    }
    function sub($a, $b) : int {
        $substract = $a - $b;
        return $substract;
    }

    $addFunction = "add";
    echo $addFunction."<br>";
    echo $addFunction(1, 2)."<br>"; //dynamic function calling

    $addFunction = "sub";
    echo $addFunction."<br>";
    echo $addFunction(1, 2)."<br>"; //dynamic function calling
?>
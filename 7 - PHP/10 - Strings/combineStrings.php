<?php

    // '.' - (dot) operator, to combine strings together

    $firstName = "John";
    $lastName = ", Smith";
    $fullName = $firstName . $lastName ;
    echo "Full Name: " . $fullName . "<br>";

    $marks = 100;
    $passed = true;

    // add string, integer, boolean and other basic variable types with '.' operator

    $content = "Student $fullName got Total " . $marks . ". He passed - " . $passed;
    echo $content . "<br>";
?>
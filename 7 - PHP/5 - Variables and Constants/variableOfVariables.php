<?php

    $male = "John, Smith"; //male is a variable
    $gender = "male"; //gender is holding a variable name

    echo $gender."<br>";
    echo $$gender."<br><br>"; //$($gender) => $(male) => John,Smith


    $student = "John, Smith";
    $male = "student";
    $gender = "male";

    echo $gender."<br>"; //male
    echo $$gender."<br>"; //$(male) => student
    echo $$$gender."<br><br>"; // $$(male) => $(student) => John, Smith
?>
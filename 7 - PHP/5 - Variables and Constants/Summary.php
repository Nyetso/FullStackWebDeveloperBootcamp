<?php

    $name = "John, Smith"; //Variable
    define ("name", "John, Smith"); //constant

    echo $name ."<br>". name . "<br><br>";

    //able to change variable but not constant
    $name = "Walter, White";
    // define ("name", "Walter, White");

    echo $name . "<br>" . name . "<br><br>";
?>
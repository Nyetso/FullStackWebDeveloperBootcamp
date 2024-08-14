<?php

    // switch
    // if (condition1) {
    //     code to be executed if condition1 is true
    // } elseif (condition2) {
    //     code to be executed if condition2 is true
    // } else {
    //     code to be executed if condition1 and condition2 is false
    // }
    // Check for odd, even numbers

    $input_number = 10;
    $result = $input_number % 2;

    if ($result) {
        echo "Odd Number<br>";
    } elseif (!$result) {
        echo "Even Number<br>";
    } else {
        echo "Input Error<br>";
    }

    switch ($result) {
        case 1:
            echo "Odd Number<br>";
            break;
        
        case 0:
            echo "Even Number<br>";
            break;

        default:
            echo "Input Error<br>";
    }

    if( $input_number > 10) {
        echo "Input number is more than 10<br>";
    } elseif ($input_number == 10) {
        echo "Input number is 10<br>";
    } else {
        echo "Input number is less than 10<br>";
    }

    switch ($input_number) {
        case $input_number>10:
            echo "Input number is more than 10<br>";
            break;

        case $input_number == 10:
            echo "Input number is 10<br>";
            break;

        default:
            echo "Input number is less than 10<br>";
    }

    // String ased condition
    $day = "Thursday";

    switch ($day) {
        case "Monday":
            echo "Monday<br>";
            break;

        case "Tuesday":
            echo "Tuesday<br>";
            break;

        case "Wednesday":
            echo "Wednesday<br>";
            break;

        case "Thursday":
            echo "Thursday<br>";
            break;

        case "Friday":
            echo "Friday<br>";
            break;

        case "Saturday":
            echo "Saturday<br>";
            break;

        case "Sunday":
            echo "Sunday<br>";
            break;

        default:
            echo "Error<br>";
    }
?>
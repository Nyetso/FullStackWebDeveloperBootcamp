<?php

// Syntax of if and else condition
// check if the inputs given by the user is correct
// if condition statement without braces
// check if student is passed or failed

//Sample 1
// Syntax of if and else condition
$some_boolean_condition = FALSE;
if($some_boolean_condition) {
    echo "This is a if block condition. <br> This is a True Condition. <br><br>";
} else {
    echo "This is a else block condition. <br> This is a False Condition. <br><br>";
}
$another_boolean_condition = FALSE;
if($some_boolean_condition && $another_boolean_condition) {
    echo "This is a if block condition. <br> This is a True Condition. <br><br>";
} else {
    echo "This is a else block condition. <br> This is a False Condition. <br><br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($some_boolean_condition || TRUE ) { ?>
            <h1>This is a True Condition</h1>
        <?php } else { ?>
            <h1>This is a False COndition</h1>
        <?php }
    ?>
</body>
</html>

<?php
// Sample 2
// check if the inputs given by the user is correct

$input1 = "some text from the user";
$input2 = 37;
if (!is_null($input1)){
    echo '$input1 is not empty<br><br>';
} else {
    echo '$input1 is empty<br><br>';
}

if (isset($input1) && !is_null($input1)){
    echo '$input1 is not empty<br><br>';
} else {
    echo '$input1 is empty<br><br>';
}

if ($input1 != ""){
    echo '$input1 is not empty<br><br>';
} else {
    echo '$input1 is empty<br><br>';
}

//best way to check empty variable
if (!empty($input1)){
    echo '$input1 is not empty<br><br>';
} else {
    echo '$input1 is empty<br><br>';
}

if ($input2 >= 24){
    echo '$input2 is greater than 24<br><br>';
} else {
    echo '$input2 is less than 24<br><br>';
}
?>

<?php
//Sample 3
// if condition statement without braces
$some_boolean_condition = FALSE;

if($some_boolean_condition)
    echo "This is a if block condition. <br> This is a True Condition. <br><br>";
else
    echo "This is a else block condition. <br> This is a False Condition. <br><br>";

// if($some_boolean_condition)
//     echo "This is a if block condition. <br>";
//     echo "This is a True Condition. <br><br>"; //error
// else
//     echo "This is a else block condition. <br>";
//     echo "This is a False Condition. <br><br>";
?>

<?php
//Sample 4
// check if student is passed or failed
$result = "passed";

if ($result === "passed") {
    echo "The student has passed the exam <br>";
} else {
    echo "the student has failed the exam <br>";
}
?>

<?php
    // if, else, elseif
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

    if( $input_number > 10) {
        echo "Input number is more than 10<br>";
    } elseif ($input_number == 10) {
        echo "Input number is 10<br>";
    } else {
        echo "Input number is less than 10<br>";
    }
?>
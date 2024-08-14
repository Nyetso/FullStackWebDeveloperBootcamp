<?php

// Scalar data types - data types that are holding a single value (Boolean, Integer, Float, String, Double)

//--------------------------------------------------------------------------------------------------------------------------//

// INTEGERS
// Integers are whole number
// Integers does not have decimals
// Integers could have + or - values
// Integer variable can hold Octal (base 8), Hexadecimal (base 16), and binary (base 2) values
// Every platform will have limited integer integer number to be defined
// constant PHP_INT_SIZE can be used to find out the integer limit

//define and print integer numbers
$marks = 87;
echo $marks."<br>";

//hexadecimal variable
$marks = 0x19F2D7C1; //435345345
echo $marks."<br>";

//string to integer addition
$marks = 10;
$total = "1000" + $marks;
echo $total."<br>"; //1010 - PHP will reconvert the string into integer

//negative numbers
$finalMarks = 5-10;
echo $finalMarks."<br>"; //-5

$finalMarks = -5+5;
echo $finalMarks."<br>"; //0

//windows
echo PHP_INT_SIZE."<br>";
echo PHP_INT_MAX."<br>";

//--------------------------------------------------------------------------------------------------------------------------//

// DOUBLES
// Decimals are real numbers
// Decimal have decimal points
// use Round() method with precision

//Define and print decimal values
$totalScore = 78.87;
echo $totalScore."<br>";
echo round($totalScore)."<br>";

//Negative Decimals
$temperature = -40.23;
echo $temperature."<br>";

//round a Double value
$price = 4.99;
echo round($price)."<br>"; //5

//compare two double with precision
$price = 1.87;
$bid = 1.97;
echo (abs($price - $bid) < 0.1)? "Accept<br>" : "Reject<br>"; //Accept

//--------------------------------------------------------------------------------------------------------------------------//

// BOOLEAN
// true / false
// case insensitive
// true = 1, false = 0 (other than value 0, the value is true)

$flag1 = true;
$flag2 = false;

//Define and use Boolean Variable
echo ($flag1) ? "True<br>" : "False<br>"; //True
echo ($flag2) ? "True<br>" : "False<br>"; //False

//Print Boolean Variables
echo "True: ".$flag1 . "<br>"; //1
echo "False: ".$flag2 . "<br>"; //(empty) meaning false

//Use string as Boolean Condition
$isLoggedIn = true;
$userSessionName = "John, Smith";
$userSessionName2 = "0";
$userSessionName3 = null;

echo ($isLoggedIn && $userSessionName) ? "User Logged In<br>" : "User Not Logged In<br>"; //User Logged In
echo ($isLoggedIn && $userSessionName2) ? "User Logged In<br>" : "User Not Logged In<br>"; //User Not Logged In
echo ($isLoggedIn && $userSessionName3) ? "User Logged In<br>" : "User Not Logged In<br>"; //User Not Logged In

//Use Integer as Boolean - Watchout for negative values
$marks = 1;
$marks2 = 0;
$marks3 = -1000;
echo ($marks) ? "Mark has value<br>" : "Mark has no value<br>"; // Mark has value
echo ($marks2) ? "Mark has value<br>" : "Mark has no value<br>"; // Mark has no value
echo ($marks3) ? "Mark has value<br>" : "Mark has no value<br>"; // Mark has value

//Operators results into boolean condition
$name = "John";
echo ($name==="John") ? "Yes John<br>" : "Not John<br>"; //Yes John


//--------------------------------------------------------------------------------------------------------------------------//

// STRINGS
// define in single or double quotes
// no limit but the limit of system memory applied
// use escape character to escape double quotes inside quotes
// string methods are available to work with string manipulation
//https://php.net/String

//Define and use strings
$name1 = "John, Smith";
$name2 = 'Jolly, Good';

echo "$name1 and $name2  <br>"; //John, Smith and Jolly, Good
echo '$name1 and $name2  <br>'; //$name1 and $name2

//Combine string
$name3 = $name1 . $name2;
echo "$name3<br>";

//backslash to escape the characters
$name4 = "This is a \"Special\" String<br>"; // This is a "Special" String
$name4 = "\t\tThis is a \"Special\" String<br>"; //     This is a "Special" String
$name4 = "\T\H\I\S is a \"Special\" String<br>";//\T\H\I\S is a "Special" String

echo "$name4<br>";
echo strlen($name4)."<br>"; //30


//--------------------------------------------------------------------------------------------------------------------------//

// NULL KEYWORDS
// Case insensitive
// used to initialize a variable with empty value
// unset() and is_null() methods
// commonly used to check if the variable has a value or empty

//Define and check null
$name = null;
echo $name."<br>"; // (empty)
echo ($name) ? "Has Value<br>" : "Empty<br>"; //empty

//check if the variable is null or not
$name = 0;
echo ($name) ? "Has Value<br>" : "Empty<br>"; //empty
echo (!is_null($name)) ? "Has Value<br>" : "Empty<br>"; //has value

//remove the variale from the program and memory
unset($name);
echo (!is_null($name)) ? "Has Value<br>" : "Empty<br>"; //empty


//--------------------------------------------------------------------------------------------------------------------------//
?>
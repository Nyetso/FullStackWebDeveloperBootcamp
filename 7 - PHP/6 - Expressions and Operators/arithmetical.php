<?php
//Addition = +
//Substraction = -
//Multiplication = *
//Division = /
//Modulus = %
//Exponentiation = **

// Sample 1
$maths = 70;
$science = 30;
$english = 80;
$totalMarks = $maths + $science + $english;
echo("Student Total Marks: " . $totalMarks . "<br>");

//Sample 2
echo("Student Total Marks of 70 + 30 + 80: " . $totalMarks . "<br>"); //operators must be outside of string
echo("Student Total Marks of: " . $maths + $science + $english ."<br>");


//Sample 3
$TotalSubjects = 300;
echo("The full marks for 3 subjects: " . $TotalSubjects . "<br>");
echo("The difference of the marks: " . $TotalSubjects-$totalMarks . "<br>");

//Sample 4
$length = 10;
$width = 20;
$area = $length*$width;
echo("The area of " . $length . " multiply ". $width . ": " . $area . "<br>");

//Sample 5
$percentage = ($totalMarks/$TotalSubjects)*100;
echo("The percentage of the marks: " . $percentage . "%<br>");

//Sample 6
$a = 100 % 5;
$b = 101 % 5;
$c = 105 % 5;
$d = 106 % 5;
echo("The remainder of the following (a, b, c, d): ". $a . ", " . $b . ", " . $c . ", " . $d . "<br>");

//Sample 7
$a = 10;
$b = 20;
$result = ($a ** 2) * ($b ** 2);
echo("a squared: " . $a**2 . "<br>");
echo("b squared: " . $b**2 . "<br>");
echo("Multiplication of both: " . $result . "<br>");
?>
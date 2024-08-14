<?php

// =  - used to assign values
// += - Add assignment operator - .=
// -= - Substract assignment operator
// *= - Multiply assignment operator
// /= - divide assisgnment operator
// %= - Modulus assignment operator

//Sample
$marks = 10;
$name = "John, Smith";

$counter = 1;
$counter = $counter + 1;
echo $counter."<br>";
$counter += $counter;
echo $counter."<br>";

$marks += 10;
echo $marks."<br>";

echo $name."<br>";
$name1 = "John";
$name1 .= ", ";
$name1 .= "Smith";
echo $name1."<br>";

$marks -= 10;
echo $marks."<br>";

$marks *= 10;
echo $marks."<br>";

$marks /= 10;
echo $marks."<br>";

$marks %= 10;
echo $marks."<br>";
?>
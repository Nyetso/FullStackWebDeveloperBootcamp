<?php

// Unary - !, ++, --
// Multiplication/Division - *, /, %
// Add/Substract - +, -
// Relational - <, >, <=, >=
// Equality - ==, !=
// Logical - AND, &&, OR, ||
// Conditional - ?:
// Assignment - =, +=, -=, *=, /=, %=

$value = 10;
echo $value++; // diplayed 10, then only added = 11
$counter = $value++; // 11 is placed into counter, then only added = 12
echo $counter; // displayed 11
echo $value; // displayed 12

$val = 5 * 2 + 5; // multiplication will have higher precedence than addition
echo $val; // displayed 15

$result1 = true && false;
$result2 = true AND false;
echo ($result1)? "True<br>" : "False<br>";
echo ($result2)? "True<br>" : "False<br>";

?>
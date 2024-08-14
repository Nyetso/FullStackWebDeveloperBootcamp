<?php

// AND / && - both should be true
// OR / || - any one can be true
// ! - if not

//Sample 1
$permission = true;
$loggedin = true;
$user = "John, Smith";
echo ( $permission AND $loggedin )? "Hello $user<br>" : "Hello Guest<br>";
$loggedin = false;
echo ( $permission && $loggedin )? "Hello $user<br><br>" : "Hello Guest<br><br>";

//Sample 2
$mathsPassed = true;
$sciencePassed = true;

echo ($mathsPassed OR $sciencePassed)? "$user has passed one or both of the subjects<br>" : "$user has not passed both of the subjects<br>";

$mathsPassed = false;
$sciencePassed = false;
echo ($mathsPassed || $sciencePassed)? "$user has passed one or both of the subjects<br><br>" : "$user has not passed both of the subjects<br><br>";

//Sample 3
$result1 = true && false;
$result2 = true AND false; //operator precedence = "Equal To" has more precedence than "AND", true is choosen
echo($result1)? "True <br>": "False <br>";
echo($result2)? "True <br><br>": "False <br><br>";

//Sample 4
$result1 = true || false;
$result2 = true OR false; //operator precedence = "Equal To" has more precedence than "AND", true is choosen
echo($result1)? "True <br>": "False <br>";
echo($result2)? "True <br><br>": "False <br><br>";
$result2 = false OR true; //operator precedence = "Equal To" has more precedence than "AND", true is choosen
echo($result1)? "True <br>": "False <br>";
echo($result2)? "True <br><br>": "False <br><br>";

//Sample 5
$totalMarks = 34;
$passingMarks = 35;
$isPassed = ($totalMarks >= $passingMarks)?true:false;
echo($isPassed)?"Passed<br>":"Not Passed<br>";
echo(!$isPassed)?"Passed<br>":"Not Passed<br>";
?>
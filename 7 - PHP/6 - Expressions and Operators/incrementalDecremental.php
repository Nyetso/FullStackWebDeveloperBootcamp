<?php

//Equal to = ==
//Data type and value identical = ===
//Not equal to = != / <> / !==
//Greater than = >
//Less than = <
//Greater than or equall to = >=
//Less than or equal to = <=
//Increment = ++
//Decrement = --

//Sample 1 - Equal to
$php_version = 7.5;
$php_system_version = PHP_MAJOR_VERSION . "." . PHP_MINOR_VERSION;
echo( $php_version == $php_system_version)? "Version matched<br><br>" : "Version does not match<br><br>";

//Sample 2 - Data type and value identical
$name1 = "10";
$name2 = 10;
echo ($name1 === $name2)? "Name Matched<br>" : "Name Does Not Matched<br>";
echo ($name1 == $name2)? "Name Matched<br>" : "Name Does Not Matched<br>";
$name3 = "10";
echo ($name1 === $name3)? "Name Matched<br><br>" : "Name Does Not Matched<br><br>";

//Sample 3 - Not equal to
$specialFruit = "Oranges";
$fruit1 = "Apple";
$fruit2 = "Oranges";

echo ($specialFruit!=$fruit1)? "It is not Oranges<br>" : "It is Oranges<br>";
echo ($specialFruit!=$fruit2)? "It is not Oranges<br>" : "It is Oranges<br>";
echo ($specialFruit<>$fruit2)? "It is not Oranges<br>" : "It is Oranges<br>";
echo ($specialFruit!==$fruit2)? "It is not Oranges<br><br>" : "It is Oranges<br><br>";

//Sample 4 - Greater than / greater than and equal to
$citizen1 = "John";
$citizen2 = "Walter";
$citizen3 = "Ajit";
$citizen4 = "Smith";

$ageLimit = 60;
$age1 = 40;
$age2 = 64;
$age3 = 80;
$age4 = 60;

echo ($age1 > $ageLimit)? "$citizen1 is a senior<br>" : "$citizen1 is not a senior<br>";
echo ($age2 > $ageLimit)? "$citizen2 is a senior<br>" : "$citizen2 is not a senior<br>";
echo ($age3 > $ageLimit)? "$citizen3 is a senior<br>" : "$citizen3 is not a senior<br>";
echo ($age4 > $ageLimit)? "$citizen4 is a senior<br>" : "$citizen4 is not a senior<br>";
echo ($age4 >= $ageLimit)? "$citizen4 is a senior<br><br>" : "$citizen4 is not a senior<br><br>";


$ageLimit = 10;
$age1 = 10;
$age2 = 4;
$age3 = 64;
$age4 = 8;

echo ($age1 < $ageLimit)? "$citizen1 can eat pizza for free<br>" : "$citizen1 can not eat pizza for free<br>";
echo ($age1 <= $ageLimit)? "$citizen1 can eat pizza for free<br>" : "$citizen1 can not eat pizza for free<br>";
echo ($age2 < $ageLimit)? "$citizen2 can eat pizza for free<br>" : "$citizen2 can not eat pizza for free<br>";
echo ($age3 < $ageLimit)? "$citizen3 can eat pizza for free<br>" : "$citizen3 can not eat pizza for free<br>";
echo ($age4 < $ageLimit)? "$citizen4 can eat pizza for free<br><br>" : "$citizen4 can not eat pizza for free<br><br>";

$counter = 0;
echo ($counter++."<br>");
echo ($counter--."<br>");
echo ($counter); //the value is only added or deducted after the statement is finished.

echo (++$counter."<br>");
echo (--$counter."<br>"); //the value is added or deducted before the statement is finished. highest precedence.
?>
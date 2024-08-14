<?php

// & - AND
// | - OR
// ^ - XOR
// ~ - NOT - works on operator like ++ and --
// - - Unary operator

// How bits works
// 0 - bits - 0000
// 1 - bits - 0001
// 2 - bits - 0010
// 3 - bits - 0011
// 4 - bits - 0100
// 5 - bits - 0101

// 1 - 1 = 1
// 0 - 0 = 0
// 0 - 1 = 0
// 1 - 0 = 0

$first = 0; //0000
$second = 1; //0001

// 0000 & 0001 = (0&0) & (0&0) & (0&0) & (0&1) = 0000 => 0
echo ($first & $second . "<br>");

$first = 2; //0010
$second = 3; //0011

// 0010 & 0011 = (0&0) & (0&0) & (1&1) & (0&1) = 0010 => 2
echo ($first & $second . "<br>");

// 0010 | 0011 = (0|0) | (0|0) | (1|1) | (0|1) = 0011 => 3
echo ($first | $second . "<br>");

// 0010 ^ 0011 = (0^0) ^ (0^0) ^ (1^1) ^ (0^1) = 0001 => 1
echo ($first ^ $second . "<br>");

// ~0010 = 1101 => 13
echo (~$first . "<br>");

// 0011 = 1100 => 12
echo (~$second . "<br>");

?>
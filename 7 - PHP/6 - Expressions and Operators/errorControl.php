<?php

$value = 1/0; 
echo "Hello"; // Error will be displayed to the user

//To hide the error from user
// add @ symbol
@$value = 1/0; 
echo "Hello"; // Error will not be displayed to the user


echo "Before: ".$php_errormsg."<br>";
@$value = 1/0; 
echo "after: ".$php_errormsg."<br>"; // holds the error msg
?>
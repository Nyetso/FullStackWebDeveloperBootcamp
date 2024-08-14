<?php

define ("LANGUAGE", "JAVA"); //defining a constant

echo ("This is a constant ".LANGUAGE."<br>"); //cannot print constant inside double quotes
echo constant('LANGUAGE');
?>
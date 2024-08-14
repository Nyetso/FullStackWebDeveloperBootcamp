<?php

    $name;
    // echo $name;
    echo isset($name)? "Variable is set<br>":"Variable is not set<br>";

    $name = "John, Smith";
    echo isset($name)? "Variable is set<br>":"Variable is not set<br>";

    $firstName = "Test";
    $name = "firstName";
    echo isset($name)? "Variable is set<br>":"Variable is not set<br>";
    echo isset($$name)? "Variable is set<br>":"Variable is not set<br>";
?>
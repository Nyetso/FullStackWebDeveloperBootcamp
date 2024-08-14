<?php

    $name = "John, Smith";
    echo strlen($name) . "<br>";

    $name = "";
    echo strlen($name) . "<br>";

    $name = "Something";
    if (strlen($name)>0){
        echo $name . " has length of " . strlen($name) . "<br>";
    } else {
        echo "No string value <br>";
    }
?>
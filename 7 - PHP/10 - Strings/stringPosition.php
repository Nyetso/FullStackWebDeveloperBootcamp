<?php

    $content = "This is a very long content and it is a string";
    $findContent = "content";
    $findContent2 = "ConTenT";
    $position = strpos ($content, $findContent); //case sensitive
    $position2 = stripos ($content, $findContent2); //case insensitive
    echo $position . "<br>";
    echo $position2 . "<br>";

    //best way to compare position
    if ($position === false){
        echo "1) Not Found <br>";
    }

    $findContent = "This";
    $position = strpos ($content, $findContent); //case sensitive
    echo $position . "<br>";

    
?>
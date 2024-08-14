<?php

    //Learn to use the following string functions
    //- Number of words
    //- Replace Strings
    //- Reverse Strings
    //- Remove white spaces
    //- Shuffle strings
    //- Find position  case insensitive
    //- Upper and Lowercase
    //- Word wrap the string and display it

    $content = "You can do string operations easily with string functions";
    $findWord = "operations";
    echo "$content<br>";

    //- Number of words
    echo "Number of words in the string: " . str_word_count($content) . "<br>";

    //- Replace Strings
    echo "Find and Replace 'operations' with 'manipulation' : " . str_replace("operations", "manipulations", $content) . "<br>";

    //- Reverse strings
    echo strrev($content)."<br>";

    //- Shuffle string
    echo str_shuffle($content)."<br>";

    //- Find position case insensitive
    echo stripos($content, "OperaTionS")."<br>";

    //- Upper and Lowercase
    echo strtoupper($content)."<br>";
    echo strtolower($content)."<br><br>";

    //- Word wrap the string and display it
    $content2 = "     Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an 
    unknown printer took a galley of type and scrambled it to make a type specimen book. 
    It has survived not only five centuries, but also the leap into electronic typesetting, 
    remaining essentially unchanged. It was popularised in the 1960s with the release of 
    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
    software like Aldus PageMaker including versions of Lorem Ipsum.    ";
    echo $content2."<br><br>";
    echo wordwrap($content2, 50)."<br><br>";
    echo trim($content2).PHP_EOL;
?>
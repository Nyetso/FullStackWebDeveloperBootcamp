<?php

    //Open a file
    //Read the file
    //Close the file

    //File modes
    //r - read mode
    //w - write mode
    //a - append mode

    //Method 1
    //filename
    $fileName = "content.txt";
    if (file_exists($fileName)){
        if(!is_file($fileName)){
            die("File does not Exists!");
        }
    }

    //read the file
    $content = file_get_contents($fileName);

    //print the content of the file
    echo $content."<br>";


    //Method 2
    //Open a file
    $fileHandler = fopen($fileName, "r");
    $fileSize = filesize($fileName);

    //Read the file content
    $content = fread($fileHandler, $fileSize);
    echo $content."<br>";

    //close the file
    fclose($fileHandler);


    //Write operation - Method 1
    $fileHandler = fopen( $fileName, "w") or die("Unable to Open the File!");
    fwrite($fileHandler, "This is a modified content");
    fclose($fileHandler);

    //Write operation - Method 2
    $fileName1 = "NewFile.txt";
    file_put_contents($fileName1, "This is a modified content in another File.");

    //Good practise
    if (file_exists($fileName)){
        if(!is_file($fileName)){
            die("File does not Exists!");
        }
    }
?>
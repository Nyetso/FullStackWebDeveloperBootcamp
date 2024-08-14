<?php

    /*
        1) List all Files in a Directory
        2) Check for specific Files in a Directory
        3) Check if the Name is a Directory or File
        4) Create Directory
        5) Copy Files between Directories
    */

    //Sample 1: List all Files in a Directory
    //scandir
    $path = "TestFolder1";
    $result = scandir($path);
    var_dump($result);
    echo "<br>";

    foreach($result as $dir){
        if($dir != "." && $dir != ".."){
            echo $dir."<br>";
        }
    }

    //remove the . and ..
    $directory = array_diff($result, ['.', '..']);
    var_dump($directory);
    foreach($directory as $dir){
        echo $dir."<br>";
    }

    // 2) Check for specific Files in a Directory
    // 3) Check if the Name is a Directory or File
    //is_file or is_dir

    $result = scandir($path);
    $result = array_diff($result, ['.', '..']);
    foreach($result as $dir){
        if(is_file($path."/".$dir)){
            echo $dir."<br>";
        }
        
    }

    //create directory
    $result = glob("*.php");
    var_dump($result);
    echo "<br>";

    if (!file_exists("TestFolder3")){
        mkdir("TestFolder3"); //create a folder
    }

    //copy files from textfolder1 to testfolder3
    copy("TestFolder1/fileDirectories.php", "TestFolder3/fileDirectories3.php");
?>
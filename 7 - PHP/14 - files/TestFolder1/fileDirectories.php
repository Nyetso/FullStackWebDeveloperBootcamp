<?php

    /*
        1) List all Files in a Directory
        2) Check for specific Files in a Directory
        3) Check if the Name is a Directory or File
        4) Create Directory
        5) Copy Files between Directories
    */

    //Sample 1: List all Files in a Directory
    $path = "TestFolder1";
    $result = scandir($path);
    var_dump($result);

?>
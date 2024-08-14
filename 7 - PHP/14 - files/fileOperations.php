<?php

    $fileName = "MyFolder.txt";

    // if(!file_exists("MyFolder")){
    //     mkdir("MyFolder");
    // } else {
    //     echo "File Exists!";
    //     die();
    // }

    if(file_exists("MyFolder")){
        echo "File Exists!<br>";

        //check if it is a Directory
        if(is_dir($fileName)){
            echo "It is a Directory, not a File!";
        }

        //copy File
        copy($fileName, "CopyFile.txt");
        copy("CopyFile.txt", "RenamedFile.txt");
        copy("CopyFile.txt", "DeletedFile.txt");

        //rename File
        rename("RenamedFile.txt", "RenamedFile-2.txt");

        //delete File
        unlink("DeletedFile.txt");
    } else {
        echo "File Not Exists!";
        die("Error!");
    }
?>
<?php

    //read entire content
    $fileName = "students.csv";
    $content = file_get_contents($fileName);
    print_r($content);
    echo "<br><br>";

    //read line by line
    $csvFile = file($fileName);
    foreach ($csvFile as $line){
        $data[] = str_getcsv($line);
        echo $line."<br>";
        echo "<br>";

        print_r($data);
        echo "<br><br>";
    }
    
    print_r($data);
    echo "<br><br>";
?>
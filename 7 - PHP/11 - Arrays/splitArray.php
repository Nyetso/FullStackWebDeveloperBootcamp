<?php

    //String to array
    $students = "John, Parker, Amit, Jacob, Jim";
    print_r($students);
    echo "<br>";
    $studentArr = explode(",", $students);
    print_r($studentArr);
    echo "<br>";

    //array to string
    $studentList = implode(",", $studentArr);
    print_r($studentList);
    echo "<br>";

    //limited no of array elements
    $studentsArr2 = explode(",", $students , 2);
    print_r($studentsArr2);
    echo "<br>";
?>
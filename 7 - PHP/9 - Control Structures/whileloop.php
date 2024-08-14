<?php
    //While loop
    // while (condition) {
    //  //code to be executed
    //}


    //Sample 1
    $value = 1;
    while ($value <=10) {
        echo $value1."<br>";
        $value++;
    }

    //Convert for-loop to while-loop
    /*

    for ($value = 0 ; $value <= 10 ; ++$value){
        $result = $value%2;
        if ($result > 0 ) {
            echo "Odd number <br>";
        } else {
            echo "Even number <br>";
        }
    }

    */

    $value = 0;
    while ( $value <= 10) {
        if ($result > 0 ) {
            echo "Odd number <br>";
        } else {
            echo "Even number <br>";
        }
        ++$value;
    }
?>
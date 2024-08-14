<?php

    // Break the infinite loop
    // Print 1 to 10 using infinite loop

    $value = 1;
    do{
        echo $value."<br>";
        if ($value >= 100) {
            break;
        }
        $value++;
    }while(true);

    //Break in multiple loop
    $loop1 = 1;
    $loop2 = 1;
    $loop3 = 1;

    for ( ; $loop1 <= 10 ; $loop1++){
        while ($loop2 <= 10){
            do{
                if ($loop3 == 5) {
                    echo "Loop 3: ". $loop3 . "<br>";
                }
                $loop3++;
            }while($loop3 <= 10);

            if ($loop2 == 6) {
                echo "Loop 2: ". $loop2 . "<br>";
            }
            $loop2++;
        }

        if($loop1 == 7) {
            break;
        }
        echo "Loop 1: ". $loop1 . "<br>";
    }
?>
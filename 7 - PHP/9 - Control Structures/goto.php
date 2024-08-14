<?php

    // goto cannot go inside a loop. must be outside loop.

    $inputValue = 0;

    if ($inputValue <= 0) {
        goto error_block;
    }

    error_block:
        echo "This is an Error Block and will execute anyway. <br>";

    for($count=0 ; $count <= 0 ; $count++) {
        if ($count == 2) {
            goto loop2;
        }
    }

    exit();
    loop2:
        echo "Counter value is $count <br>";
?>
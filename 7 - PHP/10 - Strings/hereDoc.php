<?php

    $name = "John, Smith";
    $number = 10;

    //write a block of string using heredoc
    //html commands still runs
    echo <<< DOC_LABEL
        You can write anything inside this <br>
        "Double quotes" . anything <br>
        'Single Quotes' ... . . . . . <br>
        $name knows how to write to PHP <br>
        ($number *10) <br>
        New lines and strings. <br>
        (true) ? "Some Effect" : "No Effect";
        <br>
        <strong> Is this Bold </strong><br>
        Apart from variable, nothing will work.
    DOC_LABEL; //only variable substitution is happening
?>
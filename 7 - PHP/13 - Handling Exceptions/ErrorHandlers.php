<?php

    function custom_error_handler($errno, $errstr) {
        echo $errstr;
    }
    set_exception_handler('custom_error_handler');
    echo (5/0);
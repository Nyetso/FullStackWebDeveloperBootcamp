<?php

    function custom_exception_handler($exception) {
        echo "Caught Exception: ".$exception->getMessage()."<br>";
    }
    set_exception_handler('custom_exception_handler');

    try{
        throw new Exception("Exception is raised!");
    } finally {
        //finally block is executed before exception is raised
        //this block will run always with error or without error
        echo "This line is executed before the exception.<br>";
    }
    
?>
<?php


    function custom_exception_handler($exception) {
        echo "Caught Exception: ".$exception->getMessage()."<br>";
    }

    function divide($x, $y) :int {
        try{
            if ($y <= 0){
                throw new Exception("Divide by Zero Exception might happen<br>");
            }
            $result = $x/$y;
            return $result;
        } catch (Exception $e) {
            throw new Exception("Divide method has input param is less than zero.<br>".$e->getMessage());
        }
        
    };

    set_exception_handler('custom_exception_handler');
    divide(1,0);
?>
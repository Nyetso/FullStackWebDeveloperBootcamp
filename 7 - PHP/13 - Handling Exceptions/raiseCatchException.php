<?php

    /*
        try {
            //there is an error in this block
        } catch (Exception $error) {
            //jump to this block if try block has error
        }

    */

    function divide($x, $y) :int {
        if ($y <= 0){
            throw new Exception("Divide by Zero Exception might happen");
        }
        $result = $x/$y;
        return $result;
    };

    try{
        $result = divide(1, 0);
    }catch (Exception $error){
        echo "Caught Exception: ".$error->getMessage()."<br>";
    }
?>
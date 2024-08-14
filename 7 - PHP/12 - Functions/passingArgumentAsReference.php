<?php

    //reference: https://www.php.net/manual/en/about.prototypes.php

    $result = 0;

    function add($a, $b, $result = null) : int {
        $result = $a + $b;
        return $result;
    }
    echo $result."<br>";
    $result = add(1,2);
    echo $result."<br>";

    $result = 0;
    echo $result."<br>";
    add(1,2, $result);
    echo add(1,2, $result)."<br>";
?>
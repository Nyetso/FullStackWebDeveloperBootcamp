<?php

    $dateArr = getdate();
    var_dump($dateArr);
    echo "<br>";

    foreach($dateArr as $format => $value){
        echo $format. " => " . $value . "<br>";
    }

    echo "Weekday: ".$dateArr["weekday"]. "<br>";
    echo "Weekday: ".getdate()["weekday"]. "<br>";
    echo "Year: ".getdate()["year"]. "<br>";
?>
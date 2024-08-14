<?php

    echo date_create("now")->format("Y-m-d H:i:s")."<br>";
    echo date_create("+1 day")->format("Y-m-d H:i:s")."<br>";
    echo date_create("-1 day")->format("Y-m-d H:i:s")."<br>";

    $strTime = strtotime("2019-05-21 9:00:00");
    echo date("d-m-Y H:i:s", $strTime)."<br>";

    if(time() >= $strTime) {
        echo "Current Time is Ahead <br>";
    }else{
        echo "Current Time is not Ahead <br>";
    }
?>
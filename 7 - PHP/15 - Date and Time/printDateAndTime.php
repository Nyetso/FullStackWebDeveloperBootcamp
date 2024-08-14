<?php

    /*
        date(format, timestamp)

        d - represent the day of the month; two digits with leading zeroes (01 to 31)
        D - represent the day of the week in text as an abbreviation (Mon to Sun)
        m - represent the month of the year; two digits with leading zeroes (01 to 12)
        M - represent the month in text as an abbrevaition (Jan to Dec)
        y - represent the year in two digits (00 or 14)
        Y - represent the year in four digits (2008 or 2024)

        h - represent the hour in 12-hour format with leading zeroes (01 to 12)
        H - represent the hour in 24-hour format with leading zeroes (00 to 23)
        i - represent the minutes with leading zeroes (00 to 59)
        s - represent the seconds with leading zeroes (00 to 59)
        a - represent lowercase ante meridiem and post meridiem (am or pm)
        A - represent uppercase ante meridiem and post meridiem (AM or PM)

    */

    echo "Current Date: ".date("d-m-y")."<br>";
    echo "Current Date: ".date("d-m-Y")."<br>";
    echo "Current Date: ".date("d-m-y h:i:s a")."<br>";
    echo "Current Date: ".date("d-m-y H:i:s A")."<br>";
    echo "Current Date: ".date("D-M-Y")."<br>";

    //milliseconds
    echo "Current Time in Milliseconds: ". time() ."<br>";

    $time = time() + 1000; //to add the time, have to add with milliseconds
    echo "Current Date: ".date("d-m-y H:i:s A", $time)."<br>";
?>
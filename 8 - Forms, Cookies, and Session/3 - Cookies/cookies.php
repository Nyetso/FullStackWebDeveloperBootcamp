<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <h1>Cookie</h1>
    <?php
        $cookie_name = "user";
        $cookie_value = "phpbootcamp";

        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        if (!isset($_COOKIE[$cookie_name])){
            echo "Welcome ".$cookie_value.". Nice to meet you!<br>";
        } else {
            echo " Hey, ".$cookie_value.". You are back!<br>";
            echo "Value is: ".$_COOKIE[$cookie_name]."<br>";
        }   
        //to delete cookies, set the time to -1 year
    ?>
</body>
</html>
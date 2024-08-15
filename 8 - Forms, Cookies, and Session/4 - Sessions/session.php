<?php

    //start a session
    session_start();

    //declaring a session
    $_SESSION['firstName'] = "phpbootcamp";
    // $_SESSION['firstName'] = $_GET['name'];

    //read a session
    echo $_SESSION['firstName']."<br>";

    //delete a session
    unset($_SESSION['firstName']);

?>
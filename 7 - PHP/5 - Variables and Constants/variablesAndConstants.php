<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables and Constants PHP</title>
</head>
<body>
    <h1>Variables</h1>
    <ul>
        <li>
            Define Variable => $message = "Hello!";<br>
            Define Variable => Only start with "$" and underscore "_"
        </li>
        <li>
            Access Variable => echo($message);
        </li>
        <li>
            example <br>
            <?php 
                $aboutMe = "I Love Programming!";
                echo("<strong>About Me : </strong>");
                echo($aboutMe);
            ?>
        </li>
    </ul>
    <ul>
        <strong>String Example (Concatenation)</strong>
        <li>
            <?php
                $name = "Harris";
                $message = "String message!";
                echo ($name . ": " . $message . "<br>");
                echo("$name: $message");
            ?>
        </li>
        <br>
        <strong>Integer Example</strong>
        <li>
            <?php
                $version = 8.3;
                echo("The PHP version is: $version");
            ?>
        </li>
        <br>
        <strong>Combine string and integer</strong>
        <li>
            <?php
                echo("I am $name: $aboutMe. The PHP version is: $version");
            ?>
        </li>
        <br>
        <strong>Functions Example</strong>
        <li>
            <?php
                function add() {
                    $sum = 5 + 4;
                    return $sum;
                };
            ?>
            
            <?php
                $sum2 = add();
                echo("The sum using add function is: ".$sum2);
            ?>
        </li>
        <br>
        <strong>Case Sensitivity Example</strong>
        <li>
            <?php
                echo("all in lowercase"."<BR>");
                ECHO("ALL IN UPPERCASE");
                //systax is not case sensitive, however, variables are case sensitive
            ?>
        </li>
        <br>
        <strong>Scope and Global Variable Example</strong>
        <li>
            <?php
                $message = "Welcome to PHP!<br>"; //Global variable

                function print_message() {
                    $message = "Welcome to PHP2!<br>";
                    echo $message; //cannot access outside variables
                }
                print_message();
                echo $message;
            ?>
        </li>
        <li>
            <?php
                global $message; //must declare first, then only give parameter. cannot be acces in functions
                $message = "Global!<br>";

                echo $message;
            ?>
        </li>
    </ul>
</body>
</html>
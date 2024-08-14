<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>
<body>
    <?php
        function name () {
            $name = "John, Smith";
            return $name;
        }
        function age () {
            $age = 32;
            return $age;
        }
    ?>

    <h1>Exercise 1: Create and Display Variables</h1>
    <h2>String Variable: <?= name() ?><br></h2>

    <h2>Integer Variable: <?= age() ?><br></h2>

    <h2>Print Variable from Function: His Name is <?= name() ?>. His Age is <?= age() ?>.<br></h2>

    <h2>Static Variable:
    <?php
        static $flag = 10;
        echo $flag."<br>";
    ?> </h2>

    <h2>Global Variable: 
    <?php
        global $version;
        $version = 7.3;
        echo $version."<br>";
    ?></h2>
    
    <h2>Super Global Variable: 
    <?php echo $GLOBALS['version']; ?></h2>

    <h2>Variable of Variables: 
    <?php
        $name = "John, Smith";
        $student = "name";
        echo "Student name is ${$student}";
    ?></h2>
</body>
</html>
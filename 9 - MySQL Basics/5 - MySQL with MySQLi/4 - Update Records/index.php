<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQLi</title>
</head>
<body>
    <h1>MySQLi - Check Connection</h1>

    <?php
        // $dns = "mysql:host=localhost;dbname=school_db";
        $id = 4;
        $name = "John, Smith";
        $query = "UPDATE `student` SET `name`='$name' WHERE `ID` = $id";
        $hostname = "localhost";
        $dbname = "school_db";
        $username = "root";
        $password = "";

        try {
            //Establishing a connection
            $db = new mysqli($hostname, $username, $password, $dbname);

            //Check the connection
            if($db->connect_error) {
                die("Connection Failed" . $db->connect_error);
            }

            //execute the query
            if($result = $db->query($query) === TRUE) {
                echo "Success!<br><br>";
            } else {
                echo "Failure!".$db->error;
            }

            //close the connection
            $db->close();
            
        } catch (Exception $e) {
            $error_message = $e->getMessage();
            echo "<p>Error Message: $error_message <br></p>";
        }

    ?>
</body>
</html>
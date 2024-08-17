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
        $query = "SELECT * FROM student;";
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
            $result = $db->query($query);

            //loop the records
            while ($student = $result->fetch_assoc()){
                echo "ID: ". $student['ID']."<br>";
                echo "NAME: ". $student['name']."<br><br>";
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
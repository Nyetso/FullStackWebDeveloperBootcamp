<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL PDO</title>
</head>
<body>
    <h1>PDO - Check Connection</h1>

    <?php
        $query = "SELECT * FROM student;";
        $dns = "mysql:host=localhost;dbname=school_db";
        $username = "root";
        $password = "";

        try {
            $db = new PDO($dns, $username, $password);

            //prepare statement
            $statement = $db->prepare($query);

            //execute the query
            $statement->execute();

            //loop the records
            while ($student = $statement->fetch()){
                echo "ID: ". $student['ID']."<br>";
                echo "NAME: ". $student['name']."<br><br>";
            }

            //close the statement
            $statement->closeCursor();
            
        } catch (Exception $e) {
            $error_message = $e->getMessage();
            echo "<p>Error Message: $error_message <br></p>";
        }

    ?>
</body>
</html>
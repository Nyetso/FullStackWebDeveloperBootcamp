<?php

    /*
        PDO - PHP Data Object

        create table
            same steps as the normal SQL syntax

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



    */

?>
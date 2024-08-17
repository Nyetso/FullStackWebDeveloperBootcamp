<?

    /*
        CREATE TABLE `emp_db`.`new_table` (
        `idnew_table` INT NOT NULL,
        PRIMARY KEY (`idnew_table`));

        INSERT INTO `emp_db`.`tbl_emp` (`name`, `designation`) VALUES ('John, Smith', 'IT Manager');
        INSERT INTO `emp_db`.`tbl_emp` (`name`, `designation`) VALUES ('Jim', 'Manager');

        SELECT * FROM emp_db.tbl_emp; //display all
        SELECT * FROM emp_db.tbl_emp where name like '%J%'; //'like' query
        SELECT * FROM emp_db.tbl_emp where name ='Jim'; //exact query
        SELECT name FROM emp_db.tbl_emp where name ='Jim'; //display specific column
        SELECT * FROM emp_db.tbl_emp LIMIT 2; //Display a certain amount of records - limitting the query
        SELECT * FROM emp_db.tbl_emp WHERE 'name' IS NULL; //query for record which is null
        SELECT * FROM emp_db.tbl_emp WHERE 'name' IS NOT NULL; //query for record which is not null
        SELECT * FROM emp_db.tbl_emp ORDER BY designation; //arranging the data (default ascending order)
        SELECT * FROM emp_db.tbl_emp ORDER BY designation ASC; //arranging the data in ascending order
        SELECT * FROM emp_db.tbl_emp ORDER BY designation DESC; //arranging the data in descending order

        UPDATE tbl_emp SET name = 'Jim2' WHERE emp_id=2; //update the data

        DELETE FROM tbl_emp WHERE emp_id = 2;


        INSERT:
            INSERT is a keyword to INSERT the data in the table.

        SQL SYNTAX:
            INSERT INTO table_name VALUES (value1, value2, value3);

        SQL QUERY:
            INSERT INTO fees VALUES(10, 86);

        SELECT:
            SELECT is a keyword to select the data from the tables.

        SQL SYNTAX:
            SELECT * FROM table_name;

        SQL QUERY:
            SELECT * FROM student;

        Clause – WHERE, LIMIT
            WHERE and LIMIT are called as Clause which are used along with SQL statement to apply the condition.

        SQL SYNTAX:
            SELECT * FROM table_name WHERE ID <= 100;

        SQL QUERY:
            SELECT * FROM student WHERE ID <= 100 LIMIT 2;
            This query tell the to MySQL to fetch student record where ID field value is less than 100 and fetch only two rows.

        Operators – IS NULL, LIKE, ORDER BY
            IS NULL, LIKE and ORDER BY are called as operators that you can apply on the condition to check and sort the records.
            IS NULL will check if the field is NULL or NOT.

            ORDER BY will order / sort the records based on the field.

            LIKE has two wild characters:
            % – The percent sign represents zero, one, or multiple characters
            _ – The underscore represents a single character

        SQL SYNTAX:
            SELECT * FROM table_name WHERE columnN IS NOT NULL
            SELECT * FROM table_name WHERE columnN LIKE pattern;
            SELECT * FROM table_name WHERE columnN LIKE pattern ORDER BY columnN;

        SQL QUERY:
            SELECT * FROM student WHERE student.NAME IS NOT NULL;
            This query tell the to MySQL to fetch student record where NAME is not null.

            SELECT * FROM student WHERE student.NAME LIKE ‘J%’;
            This query tell the to MySQL to fetch student record where NAME matches with J.

            SELECT * FROM student WHERE student.NAME LIKE ‘J%’ ORDER BY student.NAME;
            This query tell the to MySQL to fetch student record where NAME matches with J and sort the records by NAME.


        UPDATE:
            UPDATE statement is used to update an existing row in the table based on a condition specified with WHERE clause.

            SQL SYNTAX:
                UPDATE table_name SET column1 = value1, column2 = value2
                WHERE condition;

            SQL QUERY:
                UPDATE student
                SET student.name = ‘Julie’ WHERE ID = 100;

        DELETE
            DELETE statement is used to delete an existing row in the table based on a condition specified with WHERE clause.

        SQL SYNTAX:
            DELETE from table_name WHERE condition;

        SQL QUERY:
            DELETE FROM student WHERE student.name=’John’;
    */
?>
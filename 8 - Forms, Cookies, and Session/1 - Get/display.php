<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms - GET</title>
</head>
<body>
    <h1>Form - GET</h1>
    <a href="student-form.html">Back To Home</a>

    <?php
        // print_r($_GET);
        $name = $_GET['input_text'];
        $email = $_GET['input_email'];
        echo "<br>".$name."<br>".$email."<br><br>";
    ?>
</body>
</html>
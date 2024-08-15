<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms - POST</title>
</head>
<body>
    <h1>Form - POST</h1>
    <a href="student-form.html">Back To Home</a>

    <?php
        // print_r($_POST);
        $name = $_POST['input_text'];
        $email = $_POST['input_email'];
        echo "<br>".$name."<br>".$email."<br><br>";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and HTML</title>
    <script>
        <?=
            "alert('I am coming from PHP!')";
        ?>
    </script>
</head>
<body>
    <h1>Embed PHP in HTML</h1> <!-- Sample 1 -->
    <?php echo "Hello World!"; ?>
    <?= "<hr>" ?>

    <h1>HTML Attributes in PHP</h1> <!-- Sample 2 -->
    <?php
        echo "<p>Sample 1: This text is printed from PHP!</p>";
    ?>
    <?= "<hr>" ?>
    <p>
        <?php echo "Sample 2: This text is printed from PHP!"; ?>
    </p>
    <?= "<hr>" ?>

    <h1>CSS Attributes in PHP</h1> <!-- Sample 3 -->
    <p style="color:red;">Sample 3: This is a red text!</p>
    <p <?='style="color:blue;"'?>>Sample 3: This is a blue text!</p>
    <?= "<hr>" ?>

    <h1>Other Ways</h1> <!-- Sample 4 -->
    <?= "<p>" ?>
        Sample 4: This text is printed from PHP!
    <?= "</p>" ?>
    <?= "<hr>" ?>

    <h1>Javascript in PHP</h1> <!-- Sample 5 -->
    <p>Popup box</p>
    <?= "<hr>" ?>

    <h1>Special commands</h1>
    <ul>
        <li>\ - escaping character</li>
        <li>\n - New line</li>
        <li>\r - carriage return</li>
        <li>\t - tab</li>
        <li>\$ - dollar sign</li>
        <li>\' - single quotes</li>
        <li>\" - double quotes</li>
        <li>\\ - back slash/comments</li>
    </ul>
</body>
</html>
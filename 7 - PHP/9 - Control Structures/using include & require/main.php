<?php

include "header.php";

?>

<body>
    
    <?php
        include "menu.php";
        // require "submenu.php"; //if this file is not available, it will not continue running
        include_once "menu.php"; //it will check if the system have run this file or not. only execute the file one time
        // require_once "submenu.php"; //same as include_once. but it will not continue running if the file is not available.
    ?>

    <h1>Exercise in How to Include Files</h1>
</body>

<?php

    include "footer.html";

?>
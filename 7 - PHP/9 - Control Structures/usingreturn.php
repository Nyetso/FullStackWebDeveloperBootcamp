<?php

    function checkUserRoles($userRoles){
        if(empty($userRoles)) {
            echo "Roles cannot be empty!<br>";
            return;
        }

        switch ($userRoles) {
            case "Admin":
                echo "Hello Admin!<br>";
                break;
            case "Editor":
                echo "Hello Editor!<br>";
                break;
            default:
                echo "Roles is Empty!<br>";
        }
    }

    checkUserRoles("Admin");
    checkUserRoles(""); // the return statement will not print the echo "Roles is Empty!<br>";
    checkUserRoles("Editor");
?>
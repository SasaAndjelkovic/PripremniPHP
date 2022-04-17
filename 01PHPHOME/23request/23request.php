<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //colect value of input field
            $name = htmlspecialchars($_REQUEST['fname']);
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
    ?>
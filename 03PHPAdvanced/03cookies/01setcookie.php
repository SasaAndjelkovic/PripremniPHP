<?php
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (86000 *30), "/"); //86000 = 1 day
    //setcookie se mora pojaviti pre oznake <html> za postavljanje i izmenu
?>

<html>
    <body>
        <?php
            if(!isset($_COOKIE[$cookie_name])){
                echo "Cookie named " .$cookie_name. "is not set!";
            } else {
                echo "Cookie " .$cookie_name. " is set!<br>";
                echo "Value is: " .$_COOKIE[$cookie_name];
            }
        ?>
    </body>
</html>
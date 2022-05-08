<?php
    session_start();
?>

<!DOCTYPE html>

<html>
    
<body>
    <?php
        //ispisi session promenljive koje su postavljene na prethodnoj stranici
        echo "Favorite color is " .$_SESSION["favcolor"]. ".<br>";
        echo "Favorite animal is " .$_SESSION["favanimal"]. ".";
    ?>
</body>
</html>
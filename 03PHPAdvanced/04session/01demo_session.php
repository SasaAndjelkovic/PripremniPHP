<?php
    session_start();  //funkcija session_start() mora biti prva stvar u dokumentu. Pre bilo kakvih HTML oznaka
?>

<!DOCTYPE html>

<html>
    <body>
        <?php
            $_SESSION["favcolor"] = "green";
            $_SESSION["favanimal"] = "cat";
            echo "Session variables are set.";
        ?>
    </body>
</html>

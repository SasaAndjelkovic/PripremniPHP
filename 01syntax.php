<?php
    //kljucne reci, klase, funckije ne razlikuju velika i mala slova
    ECHO "Hello World!<br>";
    echo "Hello World!<br>";
    EcHo "Hello World!<br>";


    //imena promeljivih su osetljiva na velika i mala slova
    $color="red";
    echo "My car is " .$color. "<br>";
    echo "My house is" .$COLOR. "<br>"; //Undefined variable $COLOR
    echo "My boat is" .$coLOR. "<br>"; #Undefined variable $coLOR
?>

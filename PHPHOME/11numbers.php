<?php
    $x = 5985;
    var_dump(is_int($x));

    echo "<br>";

    $x = 59.85;
    var_dump(is_int($x));

    echo "<br>"; 
     
    var_dump(is_float($x));

    echo "<br>";

    $some = (int)$x;
    echo $some;

    echo "<br>";

    $y = "23456.78";
    $int_cast = (int)$y;
    echo $int_cast;
?>
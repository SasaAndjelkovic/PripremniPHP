<?php
    $x = 5;
    $y = 9;
    $z = 9;

    echo "<br>";
    echo ($x <=> $y); //output -1
    echo "<br>";

    echo ($y <=> $x); //output 1
    echo "<br>";

    echo ($y <=> $z); //output 0
    echo "<br>";

    echo ++$x;  //output 6
    echo "<br>";

    echo $y++;  //output 9
    echo "<br>";
    echo $y;    //output 10
?> 



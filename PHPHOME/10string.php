<?php
    $x = "Hello world!";
    $y = 'Hello world!';

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    echo strlen("Hello world!"); //outputs 12
    echo "<br>";
    echo str_word_count("Hello world!"); //outputs 2
    echo "<br>";
    echo strrev("Hello world!"); //outputs !dlrow olleH
    echo "<br>";
    echo strpos("Hello world!", "world"); //outputs 6
    echo "<br>";
    echo strpos($x, "world");
    echo "<br>";
    echo str_replace("world", "Dolly", $x); //outputs Hello Dolly!
?>
<?php
    $str = "<h1>Hello World!</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    //deprecated as of PHP 8.1.0, use htmlspecialchars() instead
    echo $newstr . "<br>";

    $newstr2 = htmlspecialchars("<h1>Hello World!</h1>", ENT_QUOTES);
    echo $newstr2 . "<br>";
    //ne znam cemu ovo sluzi
?>
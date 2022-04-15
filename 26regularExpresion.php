<?php
    $str1 = "Visit W3Schools";
    $str2 = "The rain in SPAIN falls mainly on the plains.";
    $str3 = "Visit Microsoft";
    $str4 = "Apples and bananas";


    $pattern1 = "/w3schools/i";
    $pattern2 = "/ain/i";
    $pattern3 = "/microsoft/i";
    $pattern4 = "/ba(na){2}/i";


    echo "<br>";
    echo preg_match($pattern1, $str1), "<br>";  //output 1
    echo preg_match_all($pattern2, $str2), "<br>";  //output 4
    echo preg_replace($pattern3, "W3Schools", $str3), "<br>";  //output Visit W3Schools
    echo preg_match($pattern4, $str4);  //output 1
?>
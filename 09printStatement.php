<?php
    $txt1 = "Learn PHP";
    $txt2 = "W3School.com";
    $x = 5;
    $y = 4;

    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";
    print "I am about to learn PHP!<br>";
    /*print "This ", "string ", "was ", "made ", "with multiple parameters.";
    Parse error: syntax error, unexpected token "," in 
    C:\xampp\htdocs\PripremniPHP\09printStatement.php on line 10*/

    print "<h2>" . $txt1 . "</h2>";
    print "Study PHP at " . $txt2 . "<br>";
    print $x + $y;
?>
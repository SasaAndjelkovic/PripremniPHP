<?php
    $x = 5; // global scope

    function myTest() {
        /*Warning: Undefined variable $x in 
        C:\xampp\htdocs\PripremniPHP\03globalScope.php
        on line 8*/
        echo "<p>Variable x inside function is: $x</p>";
    }

    myTest();

    echo "<p>Variable x outside function is: $x</p>";
?>
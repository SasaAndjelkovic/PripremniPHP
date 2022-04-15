<?php
    function myTest () {
        $x = 5; //local scope
        echo "Variable x inside function is: $x";
    }

    myTest();

    /*Warning: Undefined variable $x in 
    C:\xampp\htdocs\PripremniPHP\04localScope.php 
    on line 12*/
    echo "Variable x outside function is: $x";
?>
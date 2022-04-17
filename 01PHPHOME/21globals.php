<?php
    $x = 75;
    $y = 25;

    function addition() {
        $q = $x + $y;  // Warning: Undefined variable $x, $y
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    addition();
    echo $q, "<br>";  // Warning: Undefined variable $q
    echo $z;
?>
<?php
    function getIterable():iterable {
        return ["a", "b", "c"];
    }

    $myIterables = getIterable();
    foreach($myIterables as $item) {
        echo $item;
    }
?>
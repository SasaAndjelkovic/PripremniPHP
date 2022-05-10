<?php
    $int = 0;

    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("integer is valid");
    } else {
        echo("integer is not valid");
    }
?>
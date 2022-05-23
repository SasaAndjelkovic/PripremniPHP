<?php
    $brojA = 123;
    $brojB = '123';

    if ( $brojA == $brojB) {
        echo 'Promenljive su iste po vrednosti';
    } else {
        echo 'Promenljive nisu iste po vrednosti';
    }

    echo '<br>';

    if ( $brojA === $brojB) {
        echo 'Promenljive su iste i po vrednosti i po tipu';
    } else {
        echo 'Promenljive nisu iste i po vrednosti i po tipu';
    }

    echo '<br>';

    if ( $brojA != $brojB) {
        echo 'Promenljive nisu iste po vrednosti';
    } else {
        echo 'Promenljive su iste po vrednosti';
    }

    echo '<br>';

    if ( $brojA !== $brojB ) {
        echo 'Promenljive nisu iste i po vrednosti i po tipu';
    } else {
        echo 'Promeljive su iste i po vrednostii i po tipu';
    }
?>
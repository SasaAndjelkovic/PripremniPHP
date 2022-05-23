<?php
    $ime = 'univerzitet singidunum';

    echo 'Cetvrto slovo je ' . $ime[3] . '<br>';

    echo 'Opseg slova od 4. duzine 3 je ' . substr($ime, 3, 3) . '<br>';
    echo 'Opseg slova od 12. duzine do kraja je ' . substr($ime, 12) . '<br>';
    echo 'Poslednja 4 slova su ' . substr($ime, -4) . '<br>';

    echo strtoupper($ime) . '<br>';

    echo ucfirst($ime) . '<br>';
    echo ucwords($ime) . '<br>';

    echo str_replace('univerzitet', 'university', $ime) . '<br>';
    $reci = explode(' ', $ime);
    echo $reci[1] . ' ' . $reci[0];
?>




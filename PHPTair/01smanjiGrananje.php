<?php
    function stampajBroj(string $poruka, int $broj) {
        echo $poruka . $broj;
    }

    $broj = rand(1, 100);

    $poruka = 'Broj je neparan: ';

    if ( $broj % 2 == 0 ) {
        $poruka = 'Broj je paran: ';
    }

    stampajBroj($poruka, $broj); 
?>
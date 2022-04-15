<?php
    function stampajBroj(string $poruka, int $broj) {
        echo $poruka . $broj;
    }

    function pripremiTekst(int $broj) {
        $poruka = 'Broj je neparan: ';

        if ( $broj % 2 == 0 ) {
            $poruka = 'Broj je paran: ';
        }

        return $poruka;
    }

    $broj = rand(1, 100);
    
    $poruka = pripremiTekst($broj);
  
    stampajBroj($poruka, $broj); 
?>
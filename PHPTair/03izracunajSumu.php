<?php  
    function izracunajSumu(array $niz): float {
        $sum = 0.0;

        foreach ($niz as $element) {
            $sum += $element;
        }

        return $sum;
    }

    $nizBrojeva = [ 1.2, -4, 0.91, 100.3, -68.91 ];

    $sumaBrojeva = izracunajSumu($nizBrojeva);

    echo 'Suma je: ' . $sumaBrojeva;

    # funkcija u svom parametru uzima argument od niza, i ciji je izlaz float broj
    # $sumabrojeva je float broj, sa kojim moze da se manipulise. npr. u ispisu kao deo stringa
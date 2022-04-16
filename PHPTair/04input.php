<?php
    $ime    = filter_input(INPUT_POST, 'ime', FILTER_SANITIZE_STRING);
    $indeks = filter_input(INPUT_POST, 'indeks', FILTER_SANITIZE_NUMBER_INT);

    echo $ime . ' ' . $indeks;

    /*
    Pocetna dva reda su optimizovana od cetiri koda u nastavku. 
    Filtriranje znaci da se ne prihvata ono sto nije string ili integer (npr. slovo M kod broja)

    $ime =    $_POST['ime'];
    $indeks = $_POST['indeks'];

    $ime =    filter_var($ime, FILTER_SANITIZE_STRING);
    $indeks = filter_var($indeks, FILTER_SANITIZE_NUMBER_INT);*/
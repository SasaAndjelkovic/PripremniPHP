<?php
    $ime =    $_POST['ime'];
    $indeks = $_POST['indeks'];

    $ime =    filter_var($ime, FILTER_SANITIZE_STRING);
    $indeks = filter_var($indeks, FILTER_SANITIZE_NUMBER_INT);

    echo $ime . ' ' . $indeks;
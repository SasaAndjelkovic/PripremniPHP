<?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    var_dump(json_decode($jsonobj, true)); //true je za asocijativni niz, podrazumevano je objekat
?>
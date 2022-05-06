<?php
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    // vazi za kreiraranje i za overwriting
    //fopen("newfile.txt", "a") - za dodavanje
?>
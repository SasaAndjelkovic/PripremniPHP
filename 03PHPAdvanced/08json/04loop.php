<?php
    $jsonobj = '{"Peter":35, "Ben":37, "Joe":43}';

    $obj = json_decode($jsonobj);
    $arr = json_decode($jsonobj, true);

    foreach($obj as $key => $value) {
        echo $key ."=>" .$value. "<br>";
    }

    foreach($arr as $key => $value) {
        echo $key ."=>" .$value. "<br>";
    }
?>
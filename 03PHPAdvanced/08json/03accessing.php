<?php
    $jsonobj = '{"Peter":35, "Ben":37, "Joe":43}';

    $obj = json_decode($jsonobj);
    $arr = json_decode($jsonobj, true);

    echo "<br>";

    echo $obj->Peter;
    echo $obj->Ben;
    echo $obj->Joe;

    echo "<br>";

    echo $arr["Peter"];
    echo $arr["Ben"];
    echo $arr["Joe"];
?>
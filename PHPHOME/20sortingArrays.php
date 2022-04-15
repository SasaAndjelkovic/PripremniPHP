<?php
    $cars = array("Volvo", "BMW", "Toyota");
    $numbers = array(4, 6, 2, 22, 11);
    $age = array("Peter"=>"35", "Ben"=>"47", "Joe"=>"43");

    sort($cars);
    echo($cars[0]), "<br>"; //output BMW
    sort($numbers);
    echo($numbers[0]), "<br>";  //output 2

    $clength = count($cars) - 1;
    rsort($cars);
    echo($cars[$clength]), "<br>";  //output  BMW

    asort($age);  //rastuci red prema vrednosti
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    ksort($age);
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
?>
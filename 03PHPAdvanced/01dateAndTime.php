<?php
    echo "Today is " .date("d/m/Y")."<br>";
    echo "Today is " .date("d.m.Y")."<br>";
    echo "Today is " .date("d-m-Y")."<br>";
    echo "Today is " .date("l")."<br>";

    date_default_timezone_set("America/New_York")."<br>";
    echo "The time is " .date("h:i:sa")."<br>";

    $d = mktime(11, 14, 54, 8, 12, 2014);
    echo "Created date is " . date("d-m-Y h:i:sa", $d)."<br>";

    $s = strtotime("10:30pm April 15 2014");
    echo "Created date is " . date("d-m-Y h:i:sa", $s)."<br>";

    $t = strtotime("tomorrow");
    echo date("d-m-Y h:i:sa", $t)."<br>";

    $n = strtotime("next Saturday");
    echo date("d-m-Y h:i:sa", $n)."<br>";

    $m = strtotime("+3 Months");
    echo date("d-m-Y h:i:sa", $m)."<br>";

    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);
    while ($startdate < $enddate) {
        echo date("d M", $startdate)."<br>";
        $startdate = strtotime("+1 week", $startdate);
    }

    $j1 = strtotime("July 04");
    $j2 = ceil(($j1-time())/60/60/24);
    echo "There are ".$j2."days until 4th of July."."<br>";

    echo "&copy; 2010-".date("Y");
    #ne umem da umetnem php kod u html
?>

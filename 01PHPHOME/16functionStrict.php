<?php declare(strict_types=1);

    function setHeight(int $minheight = 50) {
    echo "The height is: $minheight <br>";
    };

    setHeight(350);
    setHeight();


    function addFloatNumbers(float $a, float $b) : int {
        return (int)($a + $b);
    };

    echo addFloatNumbers(1.2, 5.2);
    echo "<br>";

    //pass-by-reference
    function add_five(&$value){
        $value +=5;     //nema return niti echo
    }

    $num = 2;
    add_five($num);
    echo $num;

    //error
    function addNumbers(int $a, int $b) {
        return $a + $b;
    }
    echo addNumbers(5, "5 days");

?>

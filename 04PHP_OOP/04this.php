<?php
    class Fruit {
        public $name;

        function set_name($name) {
            $this->name=$name;
        }
    }

    class Car {
        public $name;
    }

    $apple = new Fruit();
    $apple->set_name("Apple");
    echo $apple->name;
    echo "<br>";

    $car = new Car();
    $car->name="BMW";
    echo $car->name;
?>
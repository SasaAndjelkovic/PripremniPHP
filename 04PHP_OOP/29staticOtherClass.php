<?php
    class greeting {
        public static function welcome() {
            echo "Hello World!";
        }
    }

    //static metoda treba da bude public da bo se pozvala iz drugih klasa 
    class SomeOtherClass {
        public function message() {
            greeting::welcome();       
        }
    }
?>
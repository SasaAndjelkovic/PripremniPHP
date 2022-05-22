<?php
    class Student {
        private $ime, $prezime, $indeks;

        public function getIme(): string {
            if ($this->ime === null) {       //objekat i njegovo ime
                $this->ime = '';
            }

            return $this->ime;
        }

        public function getPrezime(): string {
            if ($this->prezime === null) {       //objekat i njegovo ime
                $this->prezime = '';
            }

            return $this->prezime;
        }

        public function getIndeks(): string {
            if ($this->indeks === null) {       //objekat i njegovo ime
                $this->indeks = '00000000';
            }

            return $this->indeks;
        }

        public function setIme(string $ime) {
            if (strlen($ime) > 2 && strlen($ime) <= 16) {
                $this->ime = $ime;
            }
        }

        public function setPrezime(string $prezime) {
            if (strlen($prezime) > 2 && strlen($prezime) <= 16) {
                $this->prezime = $prezime;
            }
        }

        public function setIndeks(string $indeks) {
            if (preg_match('/^20[0-9]{6}$/', $indeks)) {
                $this->indeks = $indeks;
            }
        }

        public function __construct(string $ime, string $prezime, string $indeks)
        {
            $this->setIme($ime);
            $this->setPrezime($prezime);
            $this->setIndeks($indeks);
        }
    }

    echo '<br>';

    $student1 = new Student('Sasa', 'Andjelkovic', '20222314a');  //neispravan broj indeksa

    echo $student1->getIndeks() . '<br>'; //ako trazimo samo ime, dobicemo gresku jer je podatak privatan

    $student1->setIndeks('20222314');

    echo $student1->getIndeks() . '<br>';

    $student1->setIndeks('Milan');

    echo $student1->getIndeks() . '<br>';  //geteri i seteri sluze i kao validatori

    //ako ne zelimo naknadne promene, seteri ce biti private. geteri su i dalje public
    
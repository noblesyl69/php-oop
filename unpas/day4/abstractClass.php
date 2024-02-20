<?php 

    // belajar class absetrak

    // buat class abstrak
    abstract class Buah {
        // buat properti
        private $namaBuah, $warna;

        // buat method abstrak
        abstract public function makan() ;

        // buat method warna
        public function setWarna($warna) {
            $this->warna = $warna;
        }

        // method getwarna
        public function getWarna() {
            return $this->warna;
        }
    }

    // buat class turunannya
    class Apel extends Buah{

        // buat properti
        public $rasa ;

        // method makan dari class abstrack buah yaitu method absract makan
        public function makan()
        {
            return $this->rasa = "Saya makan apel rasanya apel";
        }

        // method get info
        public function getInfo() {
            return "{$this->makan()}, Warnanya : {$this->getWarna()}";
        }
    }

    $Buah1 = new Apel();
    $Buah1->setWarna("merah");
    echo $Buah1->getInfo();

?>
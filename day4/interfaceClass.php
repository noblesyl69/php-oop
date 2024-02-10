<?php 


        // belajar buat class interface

        // buat class
        interface Leptop {
            // buat method interface
            public function spek() ;
            public function setWarna($warna);
        }

        // buat class turunan buah
        class Lenovo implements Leptop{
            // buat properti warna
            public $warna;
            // buat method makan
            public function spek() {
                
            }
            // buat method set warna
            public function setWarna($warna)
            {
                $this->warna = $warna;
            }
        }


?>
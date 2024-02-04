<?php 


    // belajar inheritene

    // buat class Mobil
    class Mobil {
        // buat properti
        public $nama, 
                $merek, 
                $warna, 
                $kecepatanMax, 
                $jumlahPenumpang;
        
        // buat constructor 
        public function __construct($nama, $merek, $warna, $kecepatanMax, $jumlahPenumpang)
        {
            $this->nama = $nama;
            $this->merek = $merek;
            $this->warna = $warna;
            $this->kecepatanMax = $kecepatanMax;
            $this->jumlahPenumpang = $jumlahPenumpang;
        }

        public function getInfoMobil() {
            return "Nama Mobil : {$this->nama}, Merek Mobil : {$this->merek}, Warna Mobil : {$this->warna} | Kecepatan Mobil : {$this->kecepatanMax}, Jumlah Penumpang : {$this->jumlahPenumpang}";
        }
    }

    // buat inheritence mobil
    class MobilSport extends Mobil {

        public $updateKecepatan;

        // buat metho info lengkap mobil
        public function getInfoLengkap() {
            $UpdateMaxKecepatan = $this->kecepatanMax + 200;
            return "{$this->getInfoMobil()}, Kecepatan Update MObil Sport : {$UpdateMaxKecepatan} ";
        }
    }

    class MobilSedan extends Mobil{
        public $updateKecepatan;

        // buat metho info lengkap mobil
        public function getInfoLengkap() {
            $UpdateMaxKecepatan = $this->kecepatanMax + 100;
            return "{$this->getInfoMobil()}, Kecepatan Update MObil Sedan : {$UpdateMaxKecepatan} ";
        }
    }

    // buat objec mobil atau inisialisasi class mobil
    $mobil1 = new MobilSport("Supra", "Toyota", "Hitam", 2000, 2, "Sport");

    $mobil2 = new MobilSedan("Bmw 23", "Toyota", "Putih", 400, 4, "Sedan");

    echo $mobil1->getInfoLengkap();
    echo "<br>";
    echo $mobil2->getInfoLengkap();



?>
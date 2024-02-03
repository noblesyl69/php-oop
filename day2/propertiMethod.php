<?php 

    // buat class mobil
    class Mobil {
        // buat properti atau variable
        public $nama;
        public $merek;
        public $warna;
        public $kecepatanMaksimal;
        public $jumlahPenumpang;

        // buat method
        // method tambah kecepatan
        public function tambahKecepatan($tKecepatan){
            $max = $this->kecepatanMaksimal + $tKecepatan;
            return "nama mobil : $this->nama, merek : $this->merek, warna : $this->warna, kecepatan maksimal : $this->kecepatanMaksimal, jumlah penumpang : $this->jumlahPenumpang, tambah kecepatan : $tKecepatan, max kecepatan: $max";
        }
        // method kurangi kecepatan
        public function kurangiKecepatan(){
        }
        // ganti transmisi
        public function gantiTransmisi(){
        }
        // belok kiri
        public function belokKiri(){
        }
        // belok kanan
        public function belokKanan(){
        }
    }

    $mobil1 = new Mobil();
    $mobil1->nama = "supra";
    $mobil1->merek = "toyota";
    $mobil1->warna = "hitam";
    $mobil1->kecepatanMaksimal = 1000;
    $mobil1->jumlahPenumpang = 2;

    $mobil2 = new Mobil();
    $mobil2->nama = "XT 24";
    $mobil2->merek = "Tesla";
    $mobil2->warna = "putih";
    $mobil2->kecepatanMaksimal = 400;
    $mobil2->jumlahPenumpang = 4;

    echo $mobil1->tambahKecepatan(200);
    echo "<br>";
    echo "<br>";
    echo $mobil2->tambahKecepatan(500);

?>
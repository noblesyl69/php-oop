<?php 


    // buat class mobil
    class Mobil {
        // buat properti
        public $nama, $merek, $warna, $kecepatanMaksimal, $jumlahPenumpang, $harga;

        // buat comstruct
        public function __construct($nama, $merek, $warna, $kecepatanMaksimal, $jumlahPenumpang, $harga)
        {
            $this->nama = $nama;
            $this->merek = $merek;
            $this->warna = $warna;
            $this->kecepatanMaksimal = $kecepatanMaksimal;
            $this->jumlahPenumpang = $jumlahPenumpang;
            $this->harga = $harga;
        }

        // method atau function get tambah kecepatan
        public function getTambahKecepatan($tambahKecepatan) {
            $maxKecepatan = $this->kecepatanMaksimal + $tambahKecepatan;
            return $maxKecepatan;
        }
    }

    // buat object type
    class PrintMobil {
        public function printAllData($mobil) {
            return "Nama Mobil : $mobil->nama, Merek Mobil : $mobil->merek, Warna Mobil : $mobil->warna, Kecepatan Maksimal : $mobil->kecepatanMaksimal, Jumlah Penumpang : $mobil->jumlahPenumpang, Harga : $mobil->harga, Kecepatan Update Maxsimal : {$mobil->getTambahKecepatan(300)}";
        }
    }

    // instansiansi class mobil di object mobil
    $mobil1 = new Mobil("BMW A2", "TOYOTA", "Hitam", 500, 4, 200000000);
    echo $mobil1->getTambahKecepatan(200);
    echo "<br>";

    // instansiansi class print mobil 
    $printAllDataMobil = new PrintMobil();
    echo $printAllDataMobil->printAllData($mobil1);


?>
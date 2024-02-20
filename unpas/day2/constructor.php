<?php 


    // latihan constructor

    // class mobil
    class Mobil {
        // properti mobil
        public $nama, 
                $merek, 
                $warna, 
                $kecepatanMaksimal, 
                $jumlahPenumpang,
                $harga;

        // buat construct  
        public function __construct($namaCons, $merekCons, $warnaCons, $kecepatanMaksimalCons, $jumlahPenumpangCons, $hargaCons)
        {
            $this->nama = $namaCons;
            $this->merek = $merekCons;
            $this->warna = $warnaCons;
            $this->kecepatanMaksimal = $kecepatanMaksimalCons;
            $this->jumlahPenumpang = $jumlahPenumpangCons;
            $this->harga = $hargaCons;
        }

        // metho atau function class
        public function tambahKecepatan($upKecepatan) {
            $maxKecepatan = $this->kecepatanMaksimal + $upKecepatan;
            return "nama mobil : $this->nama, merek mobil : $this->merek, harga mobil : $this->harga, max kecepatan : $this->kecepatanMaksimal, max kecepatan update : $maxKecepatan";
        }
    }

    // object mobil
    $mobil1 = new Mobil("supra", "toyota", "merah", 1000, 3, 300000000);

    // panggil object dengan method tambah kecepatan yang di dalam class
    echo $mobil1->tambahKecepatan(200);

?>
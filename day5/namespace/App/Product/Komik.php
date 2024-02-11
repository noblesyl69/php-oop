<?php 

    // buat namespace 
    namespace App\Product;

    // buat class turunan nya 
    class Komik extends Product{
        // buat properti
        protected $jumlahHalama;

        // buat contract 
        public function __construct($judul, $penulis, $penerbit, $harga, $jumlahHalama)
        {
            // buat overriding contractnya
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jumlahHalama = $jumlahHalama;
        }

        // buat method diskon
        public function setDiskon($diskon) {
            $this->diskon = $diskon;
        }

        // buat method get info 
        public function getInfo() {
            return "{$this->getJudul()}, {$this->getLabel()}, {$this->getHarga()}";
        }

        // buat method get info product
        public function getInfoProduct()
        {
            return "{$this->getType()} | {$this->getInfo()}, $this->jumlahHalama - Halaman, Diskon 50% = {$this->hargaDiskon()}";
        }
    }

?>
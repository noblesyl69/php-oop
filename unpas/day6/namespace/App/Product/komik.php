<?php 

    // buat namespace
    namespace App\Product;

    // buat class yang turunan dari product dan berelasi ke interface info product
    class Komik extends Product implements infoProduct {
        // buat properti 
        private $halaman;

        // buat method constract
        public function __construct($judul, $penulis, $penerbit, $harga, $halaman)
        {
            // buat prerent constract 
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->halaman = $halaman;
        }

        // buat method set diskon
        public function setDiskon($diskon) {
            $this->diskon = $diskon;
        }

        // buat method set Type
        public function setType($type) {
            $this->type = $type;
        }

        // buat method info product
        public function getInfo()
        {
            return "{$this->getJudul()}, {$this->getLabel()}, {$this->getHarga()}";
        }

        // nuat method get info product
        public function getInfoProduct()
        {
            return "{$this->type} | {$this->getInfo()}, {$this->halaman} ~ Halaman, Harga setelah di diskon {$this->getHargaDiskon()}";
        }
    }

?>
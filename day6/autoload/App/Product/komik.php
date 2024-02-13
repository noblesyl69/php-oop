<?php 

    // buat namespace
    namespace App\Product;

    // buat class komik
    class Komik extends Product implements infoProduct{
        // buat properti 
        private $halaman;
        // buat contruct
        public function __construct($judul, $penulis, $penerbit, $harga, $halaman)
        {
            // buat everload
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->halaman = $halaman;
        }
        // buat set diskon
        public function setDiskon($diskon) {
            $this->diskon = $diskon;
        }

        // buat methot set type
        public function setType($type){
            $this->type = $type;
        }

        // buat get info
        public function getInfo()
        {
            return "{$this->getJudul()}, {$this->getLabel()}, {$this->getHarga()}";
        }
        // buat get info product
        public function getInfoProduct()
        {
            return "{$this->type} | {$this->getInfo()}, {$this->halaman} - Halaman, Harga Setelah Di Diskon {$this->getHargaDiskon()}";
        }
    }

?>
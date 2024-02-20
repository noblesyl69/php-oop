<?php 

    // buat namespace dari folder product trus ke folder product
    namespace App\Product;

    abstract class Product {
        // buat propertirnya
        private $judul, $penulis, $penerbit, $harga, $type;
        protected $diskon;

        // buat contrract
        public function __construct($judul, $penulis, $penerbit, $harga)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        // buat stter dan getternya
        public function setJudul($judul) {
            $this->judul = $judul; 
        }

        public function getJudul() {
            return $this->judul;
        }

        public function setPenulis($penulis) {
            $this->penulis = $penulis;
        }

        public function getPenulis()  {
            return $this->penulis;
        }

        public function setPenerbit($penerbit) {
            $this->penerbit = $penerbit;
        }

        public function getPenerbit()  {
            return $this->penerbit;
        }

        public function setHarga($harga) {
            $this->harga = $harga;
        }

        // set harga setelah di diskon
        public function hargaDiskon() {
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        public function getHarga() {
            return $this->harga;
        }

        public function setType($type) {
            $this->type = $type;
        }

        public function getType() {
            return $this->type;
        }

        // buat method getlabel
        public function getLabel() {
            return "{$this->penulis}, {$this->penerbit}";
        }

        // buat method abstract get info nya
        abstract public function getInfo() ;

        
    }


?>
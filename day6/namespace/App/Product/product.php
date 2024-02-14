<?php 

    // buat namespace
    namespace App\Product;

    // buat class abstrac
    abstract class Product {
        // buat properti 
        private $judul, $penulis, $penerbit, $harga;
        protected $diskon, $type;

        // buat contract
        public function __construct($judul, $penulis, $penerbit, $harga)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        // buat method setter dan getter
        public function setJudul($judul) {
            $this->judul = $judul;
        }
        public function getJudul() {
            return $this->judul;
        }

        public function setPenulis($penulis) {
            $this->penulis = $penulis;
        }
        public function getPenulis() {
            return $this->penulis;
        }

        public function setPenerbit($penerbit) {
            $this->penerbit = $penerbit;
        }
        public function getPenerbit() {
            return $this->penerbit;
        }

        public function setHarga($harga) {
            $this->harga = $harga;
        }
        public function getHarga() {
            return $this->harga;
        }

        // buat method get harga setelah di diskon
        public function getHargaDiskon() {
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        // buat method get label
        public function getLabel(){
            return "{$this->penulis}, {$this->penerbit}";
        }

        // buat method get info
        abstract public function getInfo() ;

    }
    

?>
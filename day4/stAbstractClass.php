<?php 

    // studikasus product dengan class abstract

    // buat class abstract 

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

        // buat method get info nya
        public function getInfo() {
            return "{$this->judul}, {$this->getLabel()}, {$this->harga}";
        }

        // buat method abstract get info product
        abstract public function getInfoProduct() ;
    }

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

        // buat method get info product
        public function getInfoProduct()
        {
            return "{$this->getType()} | {$this->getInfo()}, $this->jumlahHalama - Halaman, Diskon 50% = {$this->hargaDiskon()}";
        }
    }

    // inisialisasi class product
    $product1 = new Komik("Naruto", "Masasi Khusimoto", "Shonen Jump", 50000, 50);
    $product1->setType("komik");
    $product1->setDiskon(50);
    echo $product1->getInfoProduct();

?>
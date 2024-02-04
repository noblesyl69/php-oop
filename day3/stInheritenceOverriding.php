<?php 


    // buat class product
    class Product {
        // buat properti 
        public $judul, $penulis, $penerbit, $harga;

        // buat constructor
        public function __construct($judul, $penulis, $penerbit, $harga)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        // buat method ambil data 
        public function getLabel(){
            return "{$this->penulis}, {$this->penerbit}";
        }

        // buat method get product all
        public function getInfoProduct() {
            return "{$this->judul}, {$this->getLabel()}, {$this->harga}";
        }
    }

    // buat inheritence class komik
    class Komik extends Product{

        // buat properti
        public $jumlahHalaman;

        // buat contructor
        public function __construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman)
        {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jumlahHalaman = $jumlahHalaman;
        }

        public function getInfoProduct()
        {
            return "Komik | ". parent::getInfoProduct() .", $this->jumlahHalaman";
        }
    }

    // buat inheritence class game
    class Game extends Product{
        // buat propertinya 
        public $waktuMain ;

        // buat constructor
        public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain)
        {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->waktuMain = $waktuMain;
        }

        // buat method get info product nya
        public function getInfoProduct()
        {
            return "Game | ". parent::getInfoProduct() .", $this->waktuMain";
        }
    }


    // instansiasi class product jdi object
    $product1 = new Komik("Naruto", "Masasi", "Shonen Jumps", 100000, 20);
    $product2 = new Game("GTA V", "Sanreas", "Amrict", 500000, 50);
    echo $product1->getInfoProduct();
    echo "<br>";
    echo $product2->getInfoProduct();


?>
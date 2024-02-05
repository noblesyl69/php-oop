<?php 

    // buat class product
    class Product{
        // buat properti
        protected $judul, $penulis, $penerbit, $harga, $diskon ;

        // buat contruct
        public function __construct($judul, $penulis, $penerbit, $harga)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        // buat method get harga dari diskon
        public function getHarga() {
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        // buat method get label
        public function getLabel(){
            return "{$this->penulis}, {$this->penerbit}";
        }

        // buat method infoproduct 
        public function getinfoProduct() {
            return "{$this->judul}, {$this->getLabel()}, Rp {$this->harga}";
        }
    }

    // buat inheritence untuk class komik
    class Komik extends Product{
        // buat properti
        public $jumlahHalaman;

        // buat contruct
        public function __construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman)
        {
            // buat overriding 
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jumlahHalaman = $jumlahHalaman;
        }

        // buat method set diskon
        public function setDiskon($diskon) {
            return $this->diskon = $diskon;
        }

        // buat method getinfoProduct
        public function getInfoProduct()
        {
            return "Komik | ". parent::getinfoProduct() . ", {$this->jumlahHalaman} - halaman, Harga Setelah Diskon 50% : {$this->getHarga()}";
        }
    }

    // inisialisasi class product
    $product1 = new Komik("Naruto", "Masasi Kusimoto", "Shonent Jumps", 50000, 50);
    $product1->setDiskon(50);
    echo $product1->getInfoProduct();

?>
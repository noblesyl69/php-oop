<?php 

    // buat class product
    class Product {
        // buat properti product
        public $judul,
                $penulis,
                $penerbit,
                $harga;

        // construct
        public function __construct($judul, $penulis, $penerbit, $harga)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        // buat method atau function get label untuk penulis dan penerbit
        public function getLabel(){
            return "Nama Penulis : $this->penulis, Penerbit : $this->penerbit";
        }
    }

    // objec class product
    $product1 = new Product("naruto", "masasi kusimoto", "sonen jump", 50000);

    echo $product1->getLabel();



?>
<?php 


    // class product
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

        // buat methot atau fungsion get label
        public function getLabel(){
            return "Nama Penulis : {$this->penulis}, Penerbit : {$this->penerbit}";
        }
    }

    // buat object type
    class PrintData {
        public function getPrint(Product $product) {
            return "Judul : {$product->judul}, {$product->getLabel()}, Harga : {$product->harga}";
        }
    }

    // instansiasi class product
    $product1 = new Product("Naruto Shippuden", "masasi kusimoto", "shonen jump", 100000);
    $product2 = new Product("GTA san", "Kusnia", "Mas Gameis", 2300000);
    // instansiasi class printData
    $printData = new PrintData();
    echo $printData->getPrint($product1);
    echo "<br>";
    echo $printData->getPrint($product2);

?>
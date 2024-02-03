<?php 

    // class product
    class Product {
        // properti product
        public  $judul, 
                $penulis, 
                $penerbit, 
                $harga;
        
        // method get label nya
        public function getLabel() {
            return "komik : $this->judul, $this->penerbit";
        }
    }

    //  object product komik
    $product1 = new Product();
    // menimpa value properti product
    $product1->judul = "naruto";
    $product1->penulis = "masasi kusimoto";
    $product1->penerbit = "sonen jump";
    $product1->harga = 15000;

    echo $product1->getLabel();


?>
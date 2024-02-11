<?php 

    include_once "App/init.php";

    // inisialisasi class product
    // $product1 = new Komik("Naruto", "Masasi Khusimoto", "Shonen Jump", 50000, 50);
    // $product1->setType("komik");
    // $product1->setDiskon(50);
    // echo $product1->getInfoProduct();

    // cara instansiasi namespace

    // cara membuat alias namespace pake use
    use App\Product\Komik as productKomik;

    $product1 = new productKomik("Naruto", "Masasi Khusimoto", "Shonen Jump", 50000, 50);
    $product1->setType("komik");
    $product1->setDiskon(50);
    echo $product1->getInfoProduct();

?>
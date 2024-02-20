<?php 

    include_once "App/init.php";

    // instansiasi namespace

    use App\Product\Komik as productKomik;

    // inisialisasi class komik
    $product1 = new productKomik("Naruto", "Masasi Kusimoto", "Shonen Jump", 50000, 50);
    $product1->setDiskon(50);
    $product1->setType("Komik");
    echo $product1->getInfoProduct();

?>